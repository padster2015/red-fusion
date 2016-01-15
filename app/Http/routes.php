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

//Analyitcs Data Dashboard

Route::get('/api/v1/Data/show/{limit}', 'DataController@index');


Route::get('/api/v1/Data/channel/{channel}/show/{limit}', 'DataController@channel');


Route::get('/api/v1/Data/channel/{channel}/messageID/{message-id}/show/{limit}', 'DataController@show');


Route::get('/api/v1/Data/channel/{channel}/messageID/{message-id}/metric/{metric}/show/{limit}', 'DataController@ChannelMessageMetric');


Route::get('/api/v1/Data/save/', 'DataController@store');


// Messaging


Route::get('/api/v1/Messages/show/{limit}', 'MessagingController@index');

Route::post('/api/v1/Messages/save/', 'MessagingController@show');


Route::post('/api/v1/Messages/save/{limit}', 'MessagingController@show');


//Budget

Route::get('/api/v1/Budget/designing/{type}', 'BudgetController@index');

Route::post('/api/v1/Bessages/designing/{type}', 'BudgetController@store');

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
    //just testing with ipad prod3w
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


    // dashboard from after login!
    Route::get('/messaging', function () {
        return view('messaging.posts');
    });

//dashboard for budgets
  Route::get('/budget', function () {
        return view('budget.budget');
    });


        // profile from after login!
    Route::get('/profile', function () {
        return view('profile.profile');
    });

            // profile from after login!
    Route::post('/profile', function () {
        return view('profile.profileUpdate');
    });

        // profile from after login!
    Route::get('/settings', function () {
        return view('profile.settings');
    });

            // profile from after login!
    Route::post('/settings', function () {
        return view('profile.SettingsUpdate');
    });


        // profile from after login!
    Route::get('/settings/billing', function () {
        return view('profile.billings');
    });

            // profile from after login!
    Route::post('/settings/billing', function () {
        return view('profile.billingsUpdate');
    });

    Route::get('/home', 'HomeController@index');
});
