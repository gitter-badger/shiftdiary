<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('texts', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('text');
    		$table->string('priority');
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
        Schema::drop('texts');
    }
}
