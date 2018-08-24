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
    return view('welcome');
});



Route::get('/financeiro', function () {
    return view('financeiro/home');
});



Route::get('/relatorio-financeiro', function () {
    return view('financeiro/home');
});
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


/*ROUTES DESPESAS*/
Route::get('api/despesas','FinanceiroController@index');
Route::get('api/despesa/{id}','FinanceiroController@show');
// delete a task
Route::delete('api/despesa/{id}','TaskController@destroy');
// update existing task
Route::put('api/despesa','TaskController@store');
// create new task
Route::post('api/despesa','FinanceiroController@store');