<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create problems table
        Schema::create('problems', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('council_id')->unsigned();
            $table->foreign('council_id')->references('id')->on('councils')->onDelete('cascade');
            $table->integer('suburb_id')->unsigned();
            $table->foreign('suburb_id')->references('id')->on('suburbs')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->binary('image');
            $table->integer('status');
            $table->string('person_name');
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
        // Delete problems table
        Schema::dropIfExists('problems');
    }
}
