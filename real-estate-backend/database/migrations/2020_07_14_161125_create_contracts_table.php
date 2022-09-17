<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('property_id');
            $table->string('proposal');
            $table->enum('status', ['PENDING', 'APPROVED']);
            $table->enum('type', ['BUY', 'RENT']);
            $table->integer('period');
            $table->string('detail');
            $table->integer('current_payment_times');
            $table->boolean('recurring');
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
        Schema::dropIfExists('contracts');
    }
}
