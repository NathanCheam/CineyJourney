<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Voyage;
use Illuminate\Http\Request;

class AvisController extends Controller
{
    public function store(Request $request, Voyage $voyage)
    {
        $validated = $request->validate([
            'contenu' => 'required|string|max:1000',
        ]);

        $avis = new Avis();
        $avis->contenu = $validated['contenu'];
        $avis->voyage_id = $voyage->id;
        $avis->user_id = auth()->id();
        $avis->save();

        return redirect()
            ->route('voyages.show', $voyage->id)
            ->with('success', 'Votre commentaire a été ajouté.');
    }
}
