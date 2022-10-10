<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::namespace('Web')->group(function() {

    Route::middleware(['web'])->group(function (){
        Route::get('dashboard', 'TasksController@dashboard');

        Route::resource('tasks', 'TasksController')->only([
            'index', 'show'
        ]);
    });

    Route::namespace('Auth')->group( function() {
        Route::get('login', 'LoginController@login')->name('login');
    });
});



