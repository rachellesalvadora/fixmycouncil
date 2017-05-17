<?php
/*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
* 
* @author - Rachelle Salvadora
* @website - rachellesalvadora.com
*/

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
