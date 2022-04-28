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

Route::get('/home/{id}', function($id){
    $comics = collect(config('comics'));
    
    // @@@@ tentativo 1
    // $selectedProdutcs = $paste->where('id',  $id);
    // if ($paste->count() === 1){
    //     selectedProduct = array_values	($selectedProducts->all()[0]);
    // } else {
    //     abort(404)
    // }
    
    $selectedComic = $comics->firstwhere('id', $id);
    if(!$selectedComic) abort(404)

    return view('guest.comic', [
        'title' => $selectComic['title'] . 'DC'
        'product' => $selectedComic
    ]);
    })->name('comic');