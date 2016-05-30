<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshiptoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Internschiptools', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('tools_id')->default(2);
            $table->foreign('tools_id')->references('id')->on('tools');

            $table->unsignedInteger('internship_user_id')->default(2);
            $table->foreign('internship_user_id')->references('id')->on('internschip_user');

            $table->unsignedInteger('company_id')->default(2);
            $table->foreign('company_id')->references('id')->on('company');

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
        Schema::drop('Internschiptools');
    }
}
