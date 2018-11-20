<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::prefix('app')->group(function(){

    Route::group(['middleware' => 'auth:api'], function(){

        Route::post('login', 'UsersAppController@login');
        Route::post('register', 'UsersAppController@register');
        Route::resource('/', 'AppController');
        // Route::get('/missions', 'AppController@missions')->name('app.missions');
        // Route::get('/profile', 'AppController@profile')->name('app.profile');
        // Route::get('/options', 'AppController@options')->name('app.options');
    });


    // Route::resource('/task', 'TasksController');
    // Route::resource('/category', 'CategoryController');
    // Route::get('/category/{category}/tasks', 'CategoryController@tasks');
});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::namespace('App')->group(function(){
//   Route::prefix('app')->group(function(){
//     Route::get('/', 'AppController@index')->name('app.index');
//     Route::get('/missions', 'AppController@missions')->name('app.missions');
//     Route::get('/profile', 'AppController@profile')->name('app.profile');
//     Route::get('/options', 'AppController@options')->name('app.options');
//   });
// });
