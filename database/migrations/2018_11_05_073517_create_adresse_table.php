<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdresseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresse', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('street_num');
            $table->text('street_name');
            $table->unsignedInteger('postal_code');
            $table->text('city_name');


            $table->foreign('profil_id')->references('id')->on('profile')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unique(['street_num', 'street_name', 'profil_id']);

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
        Schema::dropIfExists('adresse');
    }
}
