<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('abbr', 6);
            $table->string('name', 50);
            $table->string('dialect')->nullable();
            $table->string('country', 50)->nullable();
            $table->string('description', 120)->nullable();
            $table->boolean('active')->nullable()->default(false);
            $table->timestamps();

            // $table->primary(['name', 'country']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('langues');
    }
}
