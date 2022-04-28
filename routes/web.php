<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];

    return view('guest.home', $data);
})->name('home');

Route::get('/characters', function () {
    return view('guest.characters');
})->name('characters');

Route::get('/movies', function () {
    return view('guest.movies');
})->name('movies');

Route::get('/tv', function () {
    return view('guest.tv');
})->name('tv');

Route::get('/games', function () {
    return view('guest.games');
})->name('games');

Route::get('/collectibles', function () {
    return view('guest.collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('guest.videos');
})->name('videos');

Route::get('/fans', function () {
    return view('guest.fans');
})->name('fans');

Route::get('/news', function () {
    return view('guest.news');
})->name('news');

//ROUTE PER COMIC

Route::get('/comic/{id}', function($id){
    $comics = collect(config('comics'));

    $selectedComic = $comics->firstWhere('id', $id);
    if( $selectedComic === null ) abort(404);
    
    $dataComic = [
        'selectedComics' => $selectedComic
    ];
    
    return view('guest.comic', $dataComic);
})->name('comic');