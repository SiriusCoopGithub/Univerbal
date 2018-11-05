<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->text('objet');
            $table->text('note_perso');
            $table->text('note_interp');
            $table->time('estimed_T');
            $table->string('sexe_interp');
            $table->string('facture_num');
            $table->tinyInteger('statuts');
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
        Schema::dropIfExists('mission');
    }
}
