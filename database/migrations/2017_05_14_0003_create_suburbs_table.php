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

class CreateSuburbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create suburbs table
        Schema::create('suburbs', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('postcode_id')->unsigned();
            $table->foreign('postcode_id')->references('id')->on('postcodes')->onDelete('cascade');
            $table->integer('council_id')->unsigned();
            $table->foreign('council_id')->references('id')->on('councils')->onDelete('cascade');
            $table->string('name');
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
        // Delete suburbs table
        Schema::dropIfExists('suburbs');
    }
}
