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
    return view('pages.dlc');
});

Route::get('/co', function(){
    return view('pages.connexion');
});

Route::get('/reg', function(){
    return view('pages.inscription');
})->name('reg');


Route::get('/testLogin',function(){
    return view('auth.login');
});

Route::get('/testInscr',function(){
    return view('auth.register');
});

Route::post('/create','UserController@create');
Route::post('/connect','UserController@connection');

Route::post('/read/{n}', 'UserController@read')->where('n','[0-9]+');

Route::get('/des/{n}', 'UserController@destroy')->where('n','[0-9]+');

Auth::routes();

Route::resource('users', 'UsersController');