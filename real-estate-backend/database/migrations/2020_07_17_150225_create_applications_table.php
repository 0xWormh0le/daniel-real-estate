<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('property_id');
            $table->string('application');
            $table->string('reject_reason');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->boolean('rent_or_buy');
            $table->integer('residual_period');
            $table->integer('phone_number');
            $table->integer('email');
            $table->integer('job');
            $table->integer('job_city');
            $table->integer('job_state');
            $table->integer('work_period');
            $table->integer('monthly_income');
            $table->enum('pet', ['No', 'Yes']);
            $table->string('sign');
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
        Schema::dropIfExists('applications');
    }
}
