<?php

use Illuminate\Support\Facades\Route;



Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::view('/contact','contact')->name('contact');


Route::get('contact','MessagesController@store')


//Route::apiResource('projects', 'PortfolioController');



?>
