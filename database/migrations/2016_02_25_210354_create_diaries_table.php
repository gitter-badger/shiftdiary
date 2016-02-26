<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('diaries', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('topic');
    		$table->integer('employee_id')->unsigned();
    		$table->foreign('employee_id')->references('id')->on('employees');
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
        Schema::drop('diaries');
    }
}
