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
          $table->increments('id');
          $table->unsignedInteger('profile_id');
          $table->unsignedSmallInteger('street_num')->nullable();
          $table->string('box_num', 10)->nullable();
          $table->text('street_name')->nullable();
          $table->unsignedSmallInteger('postal_code')->nullable();
          $table->text('city_name')->nullable();
          $table->text('country')->nullable()->default('Belgique');


          // $table->foreign('users_id')
          //       ->references('id')
          //       ->on('users')
          //       ->onUpdate('cascade')
          //       ->onDelete('cascade');

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
