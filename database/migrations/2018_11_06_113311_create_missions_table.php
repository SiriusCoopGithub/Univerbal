<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
          $table->increments('id');
          $table->string('langue_name');
          $table->dateTime('date');
          $table->text('objet', 120);
          $table->text('note_perso', 120);
          $table->text('note_interp', 120);
          $table->time('estimed_time');
          $table->string('sexe_interp', 1);
          $table->string('facture_num');
          $table->tinyInteger('statuts');
          $table->unsignedInteger('user_id');
          $table->unsignedInteger('organisation_id');
          $table->unsignedInteger('interprete_id');
          $table->timestamps();
          $table->softDeletes();

          // $table->foreign('langue_name')
          //       ->references('name')
          //       ->on('langues')
          //       ->onUpdate('cascade');
          // $table->foreign('user_id')
          //       ->references('id')
          //       ->on('users')
          //       ->onUpdate('cascade');
          // $table->foreign('organisation_id')
          //       ->references('id')
          //       ->on('organisations');
          // $table->foreign('interprete_id')
          //       ->references('id')
          //       ->on('users')
          //       ->onUpdate('cascade');

          // $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions');
    }
}
