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
        Schema::create('Internshiptools', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('tool_id')->default(2);
            $table->foreign('tool_id')->references('id')->on('tools');

            $table->unsignedInteger('internship_user_id')->default(2);
            $table->foreign('internship_user_id')->references('id')->on('internship_users');

            $table->unsignedInteger('company_id')->default(2);
            $table->foreign('company_id')->references('id')->on('companies');

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
        Schema::drop('Internshiptools');
    }
}
