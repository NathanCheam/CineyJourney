<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;

class UniversController extends Controller
{

    public function index()
    {
        $univers = Voyage::select('continent')->distinct()->get();
        return view('univers.index', compact('univers'));
    }

    public function show($univers_cine)
    {
        $voyages = Voyage::where('continent', $univers_cine)->where('en_ligne', true)->get();
        return view('univers.show', compact('univers_cine', 'voyages'));
    }
}
