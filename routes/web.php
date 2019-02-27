<?php

use App\Http\Controllers\PagesController;

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

Route::get('/', function(){
    return view('pages.accueil');
});

Route::get('/dlc', function(){
    return view('dlc');
});

Route::get('/co', function(){
    return view('connexion');
});

Route::get('/reg', function(){
    return view('inscription');
});

// HEAD
Route::post('insc', 'RegisterController@create')->name('inscription');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//


// a28488b343ed951d6276c36d773d4dd87a6fd0d6
