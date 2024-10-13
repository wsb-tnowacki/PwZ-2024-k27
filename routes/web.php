<?php

use App\Http\Controllers\OgolnyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('ogolny.welcome');
})->name('start'); */

//Route::get('/',[OgolnyController::class, 'start'])->name('start');

/* Route::get('/kontakt', function () {
    return view('ogolny.kontakt');
})->name('kontakt');
Route::get('/onas', function () {
    $zadania = [
        'Zadanie 1',
        'Zadanie 2',
        'Zadanie 3'
    ];
    return view('ogolny.onas', ['zadania' => $zadania]);
})->name('onas'); */

//Route::get('/kontakt',[OgolnyController::class, 'kontakt'])->name('kontakt');
//Route::get('/onas',[OgolnyController::class, 'onas'])->name('onas');

Route::controller(OgolnyController::class)->group(function(){
    Route::get('/','start')->name('start');
    Route::get('/kontakt', 'kontakt')->name('kontakt');
    Route::get('/onas','onas')->name('onas');
});


Route::get('/dashboard', function () {
   // return view('dashboard');
   return redirect()->route('start');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
