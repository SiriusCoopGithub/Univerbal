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
          $table->unsignedInteger('user_id')->nullable();
          $table->unsignedInteger('contact_id')->nullable();
          $table->string('user_type', 16)->nullable();
          $table->string('profile_type', 16)->nullable();
          $table->string('lastname', 50)->nullable();
          $table->string('firstname', 50)->nullable();
          $table->string('organisation_fullname', 100)->nullable();
          $table->string('organisation_abbr', 50)->nullable();
          $table->string('gsm', 20)->nullable();
          $table->string('telephone', 20)->nullable();
          $table->string('email', 100)->nullable();
          $table->string('titre', 100)->nullable();
          $table->string('sexe', 1)->nullable();


          $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
