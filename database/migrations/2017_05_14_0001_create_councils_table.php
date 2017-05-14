<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouncilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create councils table
        Schema::create('councils', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('postal');
            $table->string('postal_suburb');
            $table->string('suburb_town');
            $table->string('postcode');
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->string('website');
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
        // Delete councils table
        Schema::dropIfExists('councils');
    }
}
