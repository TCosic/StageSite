<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCohortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cohorts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('begin_year');
            $table->smallInteger('end_year');

            $table->unsignedInteger('crebo_id')->default(2);
            $table->foreign('crebo_id')->references('id')->on('crebos');

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
        Schema::drop('cohorts');
    }
}
