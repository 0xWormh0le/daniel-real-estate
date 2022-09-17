<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyAdditionalFeaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_additional_features', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('property_id')->nullable();
			$table->string('name')->nullable();
			$table->string('value')->nullable();
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
		Schema::drop('property_additional_features');
	}

}
