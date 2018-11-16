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
          $table->dateTime('date');
          $table->unsignedInteger('user_id');
          $table->text('objet', 120)->nullable();
          $table->text('beneficiaire', 120)->nullable();
          $table->text('note_perso', 120)->nullable();
          $table->text('note_interp', 120)->nullable();
          $table->time('estimed_time');
          $table->string('sexe_interp', 1);
          $table->string('facture_num')->nullable();
          $table->enum('statuts', ['active', 'selected', 'completed']);
          $table->unsignedInteger('organisation_id');
          $table->unsignedInteger('interprete_id')->nullable();
          $table->unsignedInteger('created_by');
          $table->timestamps();
          // $table->softDeletes();

          // $table->foreign('langue_1')
          //       ->references('name')
          //       ->on('langues')
          //       ->onUpdate('cascade');
          // $table->foreign('langue_2')
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
