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


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/api/v1/Data/show/{limit}', 'DataController@index');

//Route::get('/api/v1/words/lang/{lang}', 'Words@language');
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

    // Added this!
    Route::get('/', function () {
        return view('welcome');
    });

    // dashboard from after login!
    Route::get('/dashboard', function () {
        return view('dashboard.pages');
    });

        // profile from after login!
    Route::get('/profile', function () {
        return view('dashboard.profile');
    });

        // profile from after login!
    Route::get('/settings', function () {
        return view('dashboard.settings');
    });

    Route::get('/home', 'HomeController@index');
});
