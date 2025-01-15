<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function account($id)
    {
        $user = User::with(['mesVoyages', 'likes', 'avis'])->findOrFail($id);
        return view('page_perso', compact('user'));
    }
}
