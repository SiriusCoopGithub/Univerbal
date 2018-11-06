<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
          $table->increments('id');

          $table->string('name', 100)->unique();

          // $table->unsignedInteger('user_id');
          // $table->unsignedInteger('contact_id');
          // $table->unsignedInteger('profile_id');


          // $table->foreign('user_id')
          //       ->references('id')
          //       ->on('users')
          //       ->onUpdate('cascade');

          // $table->foreign('contact_id')
          //       ->references('id')
          //       ->on('users')
          //       ->onUpdate('cascade');

          // $table->foreign('profile_id')
          //       ->references('id')
          //       ->on('profiles')
          //       ->onUpdate('cascade');

          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisations');
    }
}
