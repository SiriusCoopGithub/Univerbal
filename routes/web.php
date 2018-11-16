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


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('App')->group(function(){
  Route::prefix('app')->group(function(){

    // Route::get('/{any}', function(){
    //   return view('vueapp');
    // })->where('any', '.*');

    Route::get('/', 'AppController@index')->name('app.index');
    Route::resource('/missions', 'MissionsAppController');
    Route::get('/profile', 'AppController@profile')->name('app.profile');
    Route::get('/options', 'AppController@options')->name('app.options');
  });
});


Route::namespace('Admin')->group(function(){
  Route::prefix('admin')->group(function(){

    Route::get('/', 'DashboardAdminController@index')->name('admin.index');
    Route::get('/dashboard', 'DashboardAdminController@dashboard')->name('admin.dashboard');

    Route::resource('/users', 'UsersAdminController');
    Route::resource('/roles', 'RolesAdminController');
    Route::resource('/permissions', 'PermissionsAdminController');
    Route::patch('/langues/actived/{langue}', 'LanguesAdminController@actived')->name('langues.actived');
    Route::resource('/langues', 'LanguesAdminController');
    Route::resource('/organisations', 'OrganisationsAdminController');
    Route::resource('/missions', 'MissionsAdminController');

  });
});


// Route::prefix('missions')->middleware('role:superadmin|admin|user')->group(function(){
//   Route::resource('/missions', 'MissionsController');
// });
