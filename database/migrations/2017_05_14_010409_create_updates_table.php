<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create updates table
        Schema::create('updates', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('title');
            $table->text('description');
            $table->binary('image');
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
        // Delete updates table
        Schema::dropIfExists('updates');
    }
}
