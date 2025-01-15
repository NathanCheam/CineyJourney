<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $voyages = Voyage::inRandomOrder()->take(5)->get();
        $continent = Voyage::select('continent')->distinct()->get();
        return view('welcome', compact('voyages', 'continent'));
    }



}
