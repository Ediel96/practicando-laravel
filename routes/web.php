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

//Route::view('/','home')
//Route::view('/','home', ['nombre' => 'Hamilton']);

/*
Route::get('home', function () {
    $nombre = "Hamilton";
    return view('home')->with(['nombre'=> $nombre]);
})->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
*/

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/portfolio','portfolio')->name('portfolio');
Route::view('/contact','contact')->name('contact');
