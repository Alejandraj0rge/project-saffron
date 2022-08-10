<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Api')->name('api.')->group(function() {
   
    Route::resource('tasksu', 'TasksController')->only([
        'index', 'store','update'
    ]);
    
    Route::post('/tasks/{task}/toggle-completed','TasksController@toggleCompleted')->name('tasks.toggle-completed');
    
});
// //Create task

// Tasks::post('/tasks','TasksController@store');

// //All tasks

// Tasks::get('/tasks','TasksController@index');

//toggleCompleted


