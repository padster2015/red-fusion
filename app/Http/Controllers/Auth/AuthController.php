<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */






    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'Facebook_api' => $data['Facebook_api'],
            'Twitter_api' => $data['Twitter_api'],
            'Googleplus_api' => $data['Googleplus_api'],
            'linkedin_api' => $data['linkedin_api'],
            'SnapChat_api' => $data['SnapChat_api'],
            'Pinterest_api' => $data['Pinterest_api'],
            'Email_api' => $data['Email_api'],
            'Affiliate_api' => $data['Affiliate_api'],
            'PaidSearch_api' => $data['PaidSearch_api'],
            'Youtube_api' => $data['Youtube_api'],
            'Deals_api' => $data['Deals_api'],
            'GA_api' => $data['GA_api'],
            'Business_name' => $data['Business_name'],


        ]);
    }
}
