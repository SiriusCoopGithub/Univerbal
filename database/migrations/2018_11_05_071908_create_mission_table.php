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
            $table->text('objet', 120);
            $table->text('note_perso', 120);
            $table->text('note_interp', 120);
            $table->time('estimed_time');
            $table->string('sexe_interp', 1);
            $table->string('facture_num');
            $table->tinyInteger('statuts', 20);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('institution_id');
            $table->unsignedInteger('interprete_id');
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
        Schema::dropIfExists('mission');
    }
}
