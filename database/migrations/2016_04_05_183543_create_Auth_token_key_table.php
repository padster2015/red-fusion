<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthTokenKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AuthNToken', function (Blueprint $table) {
            $table->increments('id');
            $table->longtext('token');
            $table->longtext('appID');
            $table->longtext('key');
			$table->integer('platform_id');
			$table->dateTime('added');
			$table->longtext('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('MessageQ');
    }
}
