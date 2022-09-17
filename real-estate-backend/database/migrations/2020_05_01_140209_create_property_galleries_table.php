<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyGalleriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_galleries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('property_id')->nullable();
			$table->integer('plan_id')->nullable();
			$table->enum('type', array('Image','Video'))->nullable();
			$table->string('name')->nullable();
			$table->integer('attachment_id')->nullable();
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
		Schema::drop('property_galleries');
	}

}
