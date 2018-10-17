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


use App\Http\Controllers\LoginController;

Route::get('/', 'LoginController@index')->name('login');
Route::post('login_form', [LoginController::class, 'login'])->name('login.form');

Route::middleware(['auth'])->group(function () {

    Route::get('home', 'UsersController@index')->name('home');

    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('user', 'UsersController');
    });

    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('roles', 'RolesController');
    });
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

});