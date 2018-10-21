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

Route::get('/', 'PagesControllerUniverbal@index');
Route::get('interprete', 'PagesControllerUniverbal@interprete');
Route::get('login', 'PagesControllerUniverbal@login');
Route::get('client', 'PagesControllerUniverbal@client');
Route::get('mdp', 'PagesControllerUniverbal@mdp');
