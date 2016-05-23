<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('internship_user_id')->default(2);
            $table->foreign('internship_user_id')->references('id')->on('internship_users');

            $table->unsignedInteger('status_id')->default(2);
            $table->foreign('status_id')->references('id')->on('statuses');

            $table->longText('review');
            $table->decimal('rating', 3,1);
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
        Schema::drop('reviews');
    }
}
