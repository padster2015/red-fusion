<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard.pages');
});
*/


//Route::get('dashboard', ['middleware' => 'auth', function () {
  //  return view ('dashboard.pages');
//}]);


Route::get('admin/profile', ['middleware' => 'auth', function () {
    return view ('home');
}]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    // Add this!
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index');
});
