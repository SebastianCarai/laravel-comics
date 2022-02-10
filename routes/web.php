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
    $comicsArray = config('comics');

    $data = [
        'comics' => $comicsArray
    ];
    return view('main', $data);
})->name('comics');

Route::get('/characters', function(){
    return view('characters');
})->name('characters');

Route::get('/comic/{id}', function($id){
    $comics = config('comics');

    $comic_to_show = false;

    foreach($comics as $comic){
        if ($comic['id'] == $id){
            $comic_to_show = $comic;
        }
    }
    $data = [
        'comic_info' => $comic_to_show
    ];


    return view('single-comic', $data);
})->name('comic');
