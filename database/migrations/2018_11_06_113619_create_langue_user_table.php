<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangueUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langue_user', function (Blueprint $table) {
          $table->primary(['user_id', 'langue_id']);

          $table->unsignedInteger('user_id');
          $table->unsignedInteger('langue_id');

          // $table->foreign('user_id')
          //       ->references('id')
          //       ->on('users')
          //       ->onUpdate('cascade')
          //       ->onDelete('cascade');

          // $table->foreign('langue_id')
          //       ->references('id')
          //       ->on('langues')
          //       ->onUpdate('cascade')
          //       ->onDelete('cascade');

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
        Schema::dropIfExists('langue_user');
    }
}
