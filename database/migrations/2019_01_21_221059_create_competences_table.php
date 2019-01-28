<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string ('description');
            $table->enum('type', ['Type1', 'Type2']);
            $table->string('professor_id');
            $table->foreign('professor_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('activity_competence', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id')->unsigned();
            $table->foreign('activity_id')->references('id')->on('activities')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('competence_id')->unsigned();
            $table->foreign('competence_id')->references('id')->on('competences')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('activity_competence');
        Schema::dropIfExists('competences');
    }
}
