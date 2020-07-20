<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes(['register' => false]);

// START ROUTE
Route::get('/', function () {
    return view('index');
});

// REALY DASHBOARD ROUTES

Route::namespace('Admin')->prefix('Administrador')->name('admin.')->middleware('can:acesso-administrador')->group(function(){  

    Route::resource('Usuários', 'UsersController')->names('users')->parameters(['Usuários' => 'user'])->except(['show']);

});

// DASHBOARD ROUTES

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function(){ 
    return view('home'); 
})->middleware('auth')->name('dashboard');
