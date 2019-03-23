<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainSublevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_sublevels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->integer('max');
            $table->integer('domain_level_id')->unsigned();
            $table->foreign('domain_level_id')->references('id')->on('domain_levels')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('domain_sublevels');
    }
}
