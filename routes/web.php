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
});


Route::get('/comic', function(){
    return view('partials.single-comic');
})->name('comic');
