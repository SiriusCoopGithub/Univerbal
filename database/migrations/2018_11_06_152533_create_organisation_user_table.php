<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisation_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('organisation_id');

            // $table->foreign('user_id')
            //       ->references('id')
            //       ->on('users')
            //       ->onUpdate('cascade')
            //       ->onDelete('cascade');

            // $table->foreign('organisation_id')
            //       ->references('id')
            //       ->on('organisation')
            //       ->onUpdate('cascade')
            //       ->onDelete('cascade');

            // $table->primary(['user_id', 'organisation_id']);
            $table->softDeletes();
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
        Schema::dropIfExists('organisation_user');
    }
}
