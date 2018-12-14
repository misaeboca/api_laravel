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
Route::get('/login', ['as' => 'login', function () { return view('auth.login'); }]);
Route::any('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@Logout']);
Route::post('logueando/', 'Auth\LoginController@Login')->name('user.login');
Route::get('password/reset', ['as' => 'password.request', function () { return view('auth.passwords.email'); }]);
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::any('/', 'HomeController@index');
Route::any('/home', 'HomeController@index')->name('home');
Route::get('changePassword','HomeController@showChangePasswordForm');
Route::post('changePassword','HomeController@changePassword')->name('changePassword');
Route::post('emailReset', 'HomeController@passwordReset')->name('password.email_reset');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('espaciosracks/{id}', 'InstaladoresController@getspaceracks')->name('espaciosracks');
Route::post('registrar/instalacion', 'InstaladoresController@Instalacion')->name('registrar.instalacion');
Route::get('racks/{id}', 'InstaladoresController@getracks')->name('racks');
