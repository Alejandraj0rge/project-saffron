<?php

use Illuminate\Support\Facades\Route;


Route::namespace('Web')->group(function() {
   
    Route::middleware(['web'])->group(function (){
        Route::resource('tasks', 'TasksController')->only([
            'index', 'show'
        ]);
    });

    Route::namespace('Auth')->group( function() {
        Route::get('login', 'LoginController@login')->name('login');
    });
});



