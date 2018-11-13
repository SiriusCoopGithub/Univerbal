<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
          $table->increments('id');
          $table->morphs('profilable');
          $table->string('user_type', ['admin', 'interprete', 'commanditaire', 'organisation']);
          $table->string('last_name', 50)->nullable();
          $table->string('first_name', 50)->nullable();
          $table->string('organisation_abbr', 50)->nullable();
          $table->string('gsm', 24)->nullable();
          $table->string('telephone', 24)->nullable();
          $table->string('email', 100)->nullable();
          $table->string('titre', 100)->nullable();
          $table->string('genre', 1)->nullable();

          // $table->foreign('user_id')
          //       ->references('id')
          //       ->on('users')
          //       ->onUpdate('cascade')
          //       ->onDelete('cascade');

          // $table->unique(['id', 'user_id','user_type']);

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
        Schema::dropIfExists('profiles');
    }
}
