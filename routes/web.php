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

Route::get('/', 'PagesControllerApp@login');
Route::get('index', 'PagesControllerApp@index');
Route::get('interprete', 'PagesControllerApp@interprete');
Route::get('login', 'PagesControllerApp@login');
Route::get('client', 'PagesControllerApp@client');
Route::get('mdp', 'PagesControllerApp@mdp');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::name('language')->get('language/{lang}', 'HomeController@language');
