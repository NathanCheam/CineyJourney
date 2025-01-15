<?php
namespace App\Http\Controllers;

use App\Models\Etape;
use App\Models\Voyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtapeController extends Controller
{
    public function index()
    {
        $etapes = Etape::all();
        return view('etapes.index', compact('etapes'));
    }

    public function create($voyageId)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $voyage = Voyage::findOrFail($voyageId);
        return view('etapes.create', compact('voyage'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'voyage_id' => 'required|exists:voyages,id',
            'titre' => 'required|string|max:255',
            'resume' => 'required|string',
            'description' => 'required|string',
            'debut' => 'required|date',
            'fin' => 'required|date|after_or_equal:debut',
            'media_link' => 'nullable|url',
        ]);

        // Création de l'étape
        Etape::create($validatedData);

        // Redirection avec un message de succès
        return redirect()->route('voyages.show', $validatedData['voyage_id'])->with('success', 'Étape ajoutée avec succès.');
    }

    public function show($etapeId)
    {
        $etape = Etape::findOrFail($etapeId);
        return view('etapes.show', compact('etape'));
    }

    public function edit(int $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $etape = Etape::findOrFail($id);
        return view('etapes.edit', compact('etape'));
    }

    public function update(Request $request, int $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        $etape = Etape::findOrFail($id);
        $etape->update($validatedData);

        return redirect()->route('etapes.show', $etape->id)->with('success', 'Étape mise à jour avec succès.');
    }

    public function destroy(Etape $etape)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $voyageId = $etape->voyage_id;
        $etape->delete();

        return redirect()->route('voyages.show', $voyageId)->with('success', 'Étape supprimée avec succès.');
    }
}
