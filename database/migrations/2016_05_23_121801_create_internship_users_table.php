<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship_users', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('internship_id')->default(2);
            $table->foreign('internship_id')->references('id')->on('internships');

            $table->unsignedInteger('company_id')->default(2);
            $table->foreign('company_id')->references('id')->on('users');

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
        Schema::drop('internship_users');
    }
}
