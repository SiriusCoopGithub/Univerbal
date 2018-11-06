<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
          $table->unsignedInteger('users_id');
          $table->unsignedInteger('street_num');
          $table->text('street_name');
          $table->unsignedInteger('postal_code');
          $table->text('city_name');
          $table->text('country');


          // $table->foreign('users_id')
          //       ->references('id')
          //       ->on('users')
          //       ->onUpdate('cascade')
          //       ->onDelete('cascade');

          $table->unique(['users_id', 'street_num', 'street_name', 'postal_code']);

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
        Schema::dropIfExists('adresses');
    }
}
