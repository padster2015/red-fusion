<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use SocialNorm\Exceptions\ApplicationRejectedException;
use SocialNorm\Exceptions\InvalidAuthorizationCodeException;


// Redirect to Facebook for authorization
Route::get('facebook/authorize', function() {
    return SocialAuth::authorize('facebook');
});

Route::get('facebook/login', function() {
    try {
        SocialAuth::login('facebook');
    } catch (ApplicationRejectedException $e) {
        // User rejected application
    } catch (InvalidAuthorizationCodeException $e) {
        // Authorization was attempted with invalid
        // code,likely forgery attempt
    }

    // Current user is now available via Auth facade
    $user = Auth::user();
    
    SocialAuth::login('facebook', function($user, $details) {
    $user->nickname = $details->nickname;
    $user->name = $details->full_name;
    $user->profile_image = $details->avatar;
    $user->save();
});
    
    
    
   return $user->name;
   
    
});

    Route::get('auth/authorize/{provider}',  function($provider) {
        return SocialAuth::authorize($provider);
    });
    Route::get('auth/login/{provider}',  function($provider) {
        try {
            SocialAuth::login($provider, function($user, $details) {
                $user->username = $details->nickname;
                $user->name = $details->full_name;
                $user->save();
            });
        } catch (ApplicationRejectedException $e) {
            // User rejected application
            dd('error1');
        } catch (InvalidAuthorizationCodeException $e) {
            // Authorization was attempted with invalid
            // code,likely forgery attempt
            print_r($provider);
            dd($e);
        }

        // Current user is now available via Auth facade
        $user = Auth::user();
        dd($user);

        return $user;
    });






//Analyitcs Data Dashboard

Route::get('/api/v1/Data/show/{limit}', 'DataController@index');


Route::get('/api/v1/Data/channel/{channel}/show/{limit}', 'DataController@channel');

Route::get('/api/v1/Data/DashboardSummary_clicks', 'DataController@Dashboard_Clicks_api');

Route::get('/dashboards','DataController@Dashboard_Clicks');


Route::get('/api/v1/Data/channel/{channel}/messageID/{message-id}/show/{limit}', 'DataController@show');


Route::get('/api/v1/Data/channel/{channel}/messageID/{message-id}/metric/{metric}/show/{limit}', 'DataController@ChannelMessageMetric');


Route::get('/api/v1/Data/save/', 'DataController@store');














//API - routes

Route::get('api', function() {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='10%'><h4>Route</h4></td>";
        echo "<td width='80%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
            echo "<td>" . $value->getMethods()[0] . "</td>";
            echo "<td> <a href='" . $value->getPath() . "'>'" . $value->getPath() . "'</td>";
            echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});

// Messaging


Route::get('/api/v1/Messages/show/{limit}', 'MessagingController@show');
Route::get('api/v1/Messages/', 'MessagingController@show');
Route::get('api/v1/Messages/hashtags', 'MessagingController@Hashtags');




Route::post('/api/v1/Messages/save/', 'MessagingController@create');


//Budget

Route::get('/api/v1/Budget/designing/{type}', 'BudgetController@index');

Route::post('/api/v1/Budget/designing/{type}', 'BudgetController@store');

Route::get('/api/v1/Budget/DashboardSummary_SPTD/', 'DataController@SPTD');



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

    // dashboard from after login!
    Route::post('/messaging', function () {
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


    





Route::get('/', function () {
    return view('welcome');
});
