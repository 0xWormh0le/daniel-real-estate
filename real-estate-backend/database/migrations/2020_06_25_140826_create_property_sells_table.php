<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertySellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_sells', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('property_id');
            $table->bigInteger('user_id');
            $table->enum('sell_type', ['SELL', 'RENT_AUTO', 'RENT_MANUAL']);
            $table->date('start_date');
            $table->date('expire_date')->nullable();
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
        Schema::dropIfExists('property_sell');
    }
}
