<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request, Voyage $voyage)
    {
        $user = $request->user();

        if (!$voyage->isLikedBy($user)) {
            $voyage->likes()->attach($user->id);
        }

        return redirect()->back()->with('success', 'Voyage aimé.');
    }

    public function destroy(Request $request, Voyage $voyage)
    {
        $user = $request->user();

        if ($voyage->isLikedBy($user)) {
            $voyage->likes()->detach($user->id);
        }

        return redirect()->back()->with('success', 'Voyage désaimé.');
    }
}
