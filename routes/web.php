<?php

use Illuminate\Support\Facades\Route;



//Route::view('/','home')->name('home');
//Route::view('/about','about')->name('about');
// Route::get('/portfolio', 'PortfolioController');


//Route::view('/contact','contact')->name('contact');


/* resource resibe => index, store , create, show, update, destroy, edit

        php artisan make:controller PortfolioController -r
                index, store , create, show, update, destroy, edit

    - solo saba a ver index show
    Route::resource('projects', 'PortfolioController')->only(['index', 'show']);

    - Cuando lo quiero ver index show pero los demas si
    Route::resource('projects', 'PortfolioController')->except(['index', 'show']);

*/


/* resource resive => index, store , create, show, update, destroy, edit

        php artisan make:controller PortfolioController -r
                index, store , create, show, update, destroy, edit

    - solo saba a ver index show
    Route::resource('projects', 'PortfolioController')->only(['index', 'show']);

    - Cuando lo quiero ver index show pero los demas si
    Route::resource('projects', 'PortfolioController')->except(['index', 'show']);

*/

/* api resive =>index, store , create, update, destroy, edit

         php artisan make:controller PortfolioController --api
                index, store , create, update, destroy, edit,

        Route::apiResource('projects', 'PortfolioController');

*/



Route::apiResource('projects', 'PortfolioController');
