<?php

namespace App\Http\Controllers;

use App\Models\Etape;
use App\Models\Voyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;use App\Models\Avis;


class VoyagesController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */

    public function create(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $continent = $request->query('continent');
        return view('voyages.create', ["continent"=>$continent]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'resume' => 'required|string',
            'description' => 'required|string',
            'continent' => 'required|string',
            'en_ligne' => 'required|boolean',
            'visuel' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $voyage = new Voyage($validatedData);
        if ($request->hasFile('visuel')) {
            $voyage->visuel = $request->file('visuel')->store('visuels', 'public');
        }
        $voyage->user_id = Auth::id();
        $voyage->save();

        return redirect()->route('accueil')->with('type', 'primary')->with('msg', 'Voyage ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $voyage = Voyage::with('avis.user')->findOrFail($id);
        return view('voyages.show', compact('voyage'));

        $voyage = Voyage::with('etapes')->findOrFail($id);
        return view('voyages.show', compact('voyage'));
    }

    public function addComment(Request $request, Voyage $voyage)
    {
        $validated = $request->validate([
            'contenu' => 'required|string|max:1000',
        ]);

        $voyage->avis()->create([
            'contenu' => $validated['contenu'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('voyages.show', $voyage->id)->with('success', 'Votre commentaire a été ajouté.');
    }


    public function storeComment(Request $request, $voyageId)
    {
        $request->validate([
            'contenu' => 'required|string|max:500',
        ]);

        $voyage = Voyage::findOrFail($voyageId);

        $voyage->avis()->create([
            'contenu' => $request->input('contenu'),
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('voyages.show', $voyageId)->with('success', 'Commentaire ajouté avec succès.');
    }





    /**
     *  the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $voyage = Voyage::findOrFail($id);
        return view('voyages.edit', compact('voyage'));
    }

    public function update(Request $request, int $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'resume' => 'required|string',
            'description' => 'required|string',
            'continent' => 'required|string',
            'en_ligne' => 'required',
            'visuel' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



        $voyage = Voyage::findOrFail($id);
        $continent = $voyage->continent;
        $voyage->update($validatedData);

        if ($request->hasFile('visuel')) {
            $voyage->visuel = $request->file('visuel')->store('visuels', 'public');
        }

        $voyage->save();

        return redirect()->route('univers.show', ['continent' => $continent])->with('success', 'Voyage mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $voyage = Voyage::findOrFail($id);
        $continent = $voyage->continent;
        $voyage->delete();

        return redirect()->route('univers.show', ['continent' => $continent])->with('success', 'Voyage supprimé avec succès.');
    }
}
