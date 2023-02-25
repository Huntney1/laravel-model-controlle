<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//?vecchio codice di visualizzazione
/* Route::get('/', function () {
    $cards = config('db_comics.card');

    return view('comics', ['cards' => $cards]);
})->name('comics');
 */

//? Nuovo codice di visualizzazione
Route::get('/',[ComicController::class,'index'])->name('comics');

Route::get('/comics/{titolo}', function($titolo){
    $cards = config('db_comics.card');

    $single = '';
    foreach($cards as $key => $card){
        if($key == $titolo){
            $single = $card;
        }
    };

    return view ('detail_fumetto', compact('single'));
})->name('detail_fumetto');

Route::get('/CHARACTERS', function () {
    return view('CHARACTERS');
})->name('CHARACTERS');
Route::get('/MOVIE', function () {
    return view('MOVIE');
})->name('MOVIE');

Route::get('/TV', function () {
    return view('TV');
})->name('TV');

Route::get('/GAMES', function () {
    return view('GAMES');
})->name('GAMES');

Route::get('/COLLECTIBLES', function () {
    return view('COLLECTIBLES');
})->name('COLLECTIBLES');

Route::get('/VIDEOS', function () {
    return view('VIDEOS');
})->name('VIDEOS');

Route::get('/FANS', function () {
    return view('FANS');
})->name('FANS');

Route::get('/NEWS', function () {
    return view('NEWS');
})->name('NEWS');

Route::get('/SHOP', function () {
    return view('SHOP');
})->name('SHOP');
