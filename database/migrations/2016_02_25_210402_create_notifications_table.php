<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('notifications', function (Blueprint $table) {
    		$table->increments('id');
    		$table->integer('employee_id')->unsigned();
    		$table->foreign('employee_id')->references('id')->on('employees');
    		$table->integer('diary_id')->unsigned();
    		$table->foreign('diary_id')->references('id')->on('diaries');
    		$table->timestamps();
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notifications');
    }
}
