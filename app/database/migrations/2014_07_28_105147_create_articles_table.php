<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
		    $table->string('title', 128);
		    $table->text('description');
			$table->timestamps();
		    
		    $table->integer('user_id')->unsigned();
		    $table->integer('category_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('category_id')->unsigned()->references('id')->on('categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
