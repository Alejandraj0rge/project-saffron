<?php

use Illuminate\Support\Facades\Route;


Route::namespace('Web')->name('web.')->group(function() {
   
    Route::resource('tasks', 'TasksController')->only([
        'index', 'show'
    ]);
    
});



