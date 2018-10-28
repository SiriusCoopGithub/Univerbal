<?php

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

Route::get('/', 'PagesControllerWeb@index');
// Route::get('/login', 'PagesControllerWeb@login');
Route::get('/app/login', 'AppUnvb\AppUnvbController@login');
Route::get('/app/interprete', 'AppUnvb\AppUnvbController@interprete');
Route::get('/app/client', 'AppUnvb\AppUnvbController@client');
Route::get('/app/mdp', 'AppUnvb\AppUnvbController@mdp');

Auth::routes();

Route::get('/dashboard', 'PagesControllerWeb@dashboard')->name('dashboard');

// Route::name('language')->get('language/{lang}', 'HomeController@language');
