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

/**
 * Before Laratrust
 */

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');

// Route::prefix('app')->middleware('role:superadmin|admin|user')->group(function(){
//   Route::get('/', 'AppController@index')->name('app.index');
//   Route::get('/missions', 'AppController@missions')->name('app.missions');
//   Route::get('/profile', 'AppController@profile')->name('app.profile');
//   Route::get('/options', 'AppController@options')->name('app.options');
// });



Route::namespace('Admin')->group(function(){
  Route::prefix('admin')->middleware('role:superadmin|MDPAdmin')->group(function(){

    Route::get('/', 'DashboardAdminController@index')->name('admin.index');
    Route::get('/dashboard', 'DashboardAdminController@dashboard')->name('admin.dashboard');

    Route::resource('/users', 'UsersAdminController');

    Route::resource('/roles', 'RolesAdminController');
    Route::resource('/permissions', 'PermissionsAdminController');
    Route::resource('/teams', 'TeamsAdminController');
    // Route::resource('/organisations', 'OrganisationsController');

  });
});


// Route::prefix('missions')->middleware('role:superadmin|admin|user')->group(function(){
//   Route::resource('/missions', 'MissionsController');
// });
