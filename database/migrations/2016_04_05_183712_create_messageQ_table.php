<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageQTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MessageQ', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message');
            $table->string('platform');
            $table->dateTime('Createdat');
			$table->dateTime('Sentat');
			$table->integer('platform_id');
			$table->integer('sent');
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
