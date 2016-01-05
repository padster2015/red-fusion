<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','B_name','email','password','Facebook_api','Twitter_api','Googleplus_api','linkedin_api','SnapChat_api','Pinterest_api','Email_api','Affiliate_api','PaidSearch_api','Youtube_api','Deals_api','GA_api',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
