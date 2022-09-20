<?php

use App\Http\Controllers\Api\TasksController;
use Illuminate\Support\Facades\Route;

// Route::resource('tasks', 'TasksController')->only([
//     'index', 'store','update'
// ]);

// Route::post('/tasks/{task}/toggle-completed','TasksController@toggleCompleted')->name('tasks.toggle-completed');
Route::namespace('Api')->group(function(){

    Route::resource('tasks', 'TasksController');
    
    Route::namespace('Auth')->group(function(){
        Route::post('login','LoginController@login')->name('login');
    });
});


// //Create task

// Tasks::post('/tasks','TasksController@store');

// //All tasks

// Tasks::get('/tasks','TasksController@index');

//toggleCompleted


