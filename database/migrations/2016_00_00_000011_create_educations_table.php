<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('leerweg', array('BBL', 'BOL'));

            $table->unsignedInteger('location_id')->default(2);
            $table->foreign('location_id')->references('id')->on('locations');

            $table->unsignedInteger('cohort_id')->default(2);
            $table->foreign('cohort_id')->references('id')->on('cohorts');

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
        Schema::drop('educations');
    }
}
