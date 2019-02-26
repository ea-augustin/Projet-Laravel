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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

  Route::resource('users','UsersController');
  Route::resource('posts','PostsController');
  
  Route::get('users/{user}/destroy', 'UserController@destroyForm');
    /*
        Route::get('/', function () {
            return view('welcome');
            
        });
            
    
    
    Route::get('/users/{id}', function ($id) {
       return 'This is user '.$id;
            
        });
        */
