<?php

use App\Http\Controllers\LikeController;
use App\Http\Controllers\VoyagesController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UniversController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtapeController;


Route::get('/', [WelcomeController::class, 'index'])->name('accueil');

Route::get('/account/{id}', [UserController::class, 'account'])->name('account');

Route::get('/univers', [UniversController::class, 'index'])->name('univers.index');
Route::get('/univers/{continent}', [UniversController::class, 'show'])->name('univers.show');

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/test-vite', function () {
    return view('test-vite');
})->name("test-vite");

Route::get('/home', function () {
    return view('dashboard');
})->name("home") -> middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard") -> middleware('auth');

Route::resource('etapes', EtapeController::class);


Route::get('/voyages/create', [VoyagesController::class, 'create'])->name('voyages.create');
Route::post('/voyages', [VoyagesController::class, 'store'])->name('voyages.store');
Route::get('/voyages/{id}', [VoyagesController::class, 'show'])->name('voyages.show');
Route::get('/voyages/{id}/edit', [VoyagesController::class, 'edit'])->name('voyages.edit');
Route::put('/voyages/{id}/update', [VoyagesController::class, 'update'])->name('voyages.update');
Route::delete('/voyages/{id}/destroy', [VoyagesController::class, 'destroy'])->name('voyages.destroy');


Route::post('/voyages/{voyage}/comment', [VoyagesController::class, 'addComment'])->name('voyages.addComment');
Route::post('/voyages/{voyage/comment', [VoyagesController::class, 'store'])->name('voyages.storeComment');


Route::post('/voyages/{voyage}/like', [LikeController::class, 'store'])->name('voyages.like');
Route::delete('/voyages/{voyage}/like', [LikeController::class, 'destroy'])->name('voyages.unlike');

Route::get('/voyages/{voyage}/etapes/create', [EtapeController::class, 'create'])->name('etapes.create');
Route::post('/etapes', [EtapeController::class, 'store'])->name('etapes.store');
