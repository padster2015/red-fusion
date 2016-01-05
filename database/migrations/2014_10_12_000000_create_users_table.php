<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('B_name')->unique();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
             $table->timestamps();
           $table->string('Facebook_api');
                      $table->string('Twitter_api');
           $table->string('Googleplus_api');
           $table->string('linkedin_api');
           $table->string('SnapChat_api');
           $table->string('Pinterest_api');
           $table->string('Email_api');
           $table->string('Affiliate_api');
           $table->string('PaidSearch_api');
           $table->string('Youtube_api');
           $table->string('Deals_api');
           $table->string('GA_api');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
