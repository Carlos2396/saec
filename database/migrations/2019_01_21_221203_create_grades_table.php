<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grader_id');
            $table->foreign('grader_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('graded_id');
            $table->foreign('graded_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('domain_sublevel_id')->unsigned();
            $table->foreign('domain_sublevel_id')->references('id')->on('domain_sublevels')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('value');
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
        Schema::dropIfExists('grades');
    }
}
