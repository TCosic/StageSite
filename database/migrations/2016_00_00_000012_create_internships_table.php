<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->increments('id');
            $table->int('start_date');
            $table->int('end_date');
            $table->mediumText('description');

            $table->unsignedInteger('contact_id')->default(2);
            $table->foreign('contact_id')->references('id')->on('contacts');

            $table->unsignedInteger('status_id')->default(2);
            $table->foreign('status_id')->references('id')->on('statuses');

            $table->unsignedInteger('education_id')->default(2);
            $table->foreign('education_id')->references('id')->on('educations');
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
        Schema::drop('internships');
    }
}
