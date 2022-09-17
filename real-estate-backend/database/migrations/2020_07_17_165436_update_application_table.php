<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->boolean('status');
            $table->string('phone_number')->change();
            $table->string('email')->change();
            $table->string('job')->change();
            $table->string('job_city')->change();
            $table->string('job_state')->change();
            $table->string('pet')->change();
            $table->integer('pet_count');
            $table->renameColumn('application', 'content')->change();
            $table->renameColumn('residual_period', 'how_long_live')->change();
            $table->renameColumn('work_period', 'how_long_work')->change();
            $table->integer('period')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            //
        });
    }
}
