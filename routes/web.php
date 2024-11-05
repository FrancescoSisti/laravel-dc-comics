<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideogameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $videogames = App\Models\Videogame::all();
    return view('pages.home', compact('videogames'));
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

//! Rotte CRUD
Route::get('/videogames', [VideogameController::class, 'index'])->name('videogames.index');
Route::get('/videogames/create', [VideogameController::class, 'create'])->name('videogames.create');
Route::post('/videogames', [VideogameController::class, 'store'])->name('videogames.store');
Route::get('/videogames/{videogame}', [VideogameController::class, 'show'])->name('videogames.show');
Route::get('/videogames/{videogame}/edit', [VideogameController::class, 'edit'])->name('videogames.edit');
Route::put('/videogames/{videogame}', [VideogameController::class, 'update'])->name('videogames.update');
Route::delete('/videogames/{videogame}', [VideogameController::class, 'destroy'])->name('videogames.destroy');
