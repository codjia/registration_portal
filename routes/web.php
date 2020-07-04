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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('/')->group(function (){
    // Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::get('/', 'PagesController@home')->name('website.home');
    Route::post('/registration', 'RegistrationController@register')->name('clients.register');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'PagesController@dash')->name('dashboard');
    Route::get('/registed_clients', 'RegistrationController@index')->name('client.registed');
    Route::get('/ymc_members', 'RegistrationController@membership')->name('ymc.members');
    Route::get('/delete/{id}', 'RegistrationController@delete')->name('client.delete');
    // Route::get('/dashboard', 'Admin\HomeController@index')->name('admin.dashboard.page');
    Route::get('/home', 'PagesController@dash');
});





