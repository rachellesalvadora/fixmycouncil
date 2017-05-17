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

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;
use App\Models\Council;
use App\Models\Suburb;

class HomeController extends Controller
{
    /**
     * View Home Page
     */
    public function index()
    {
        $problemsCount = Problem::all()->count();
        $councilsCount = Council::all()->count();
        $suburbsCount = Suburb::all()->count();

        return view('pages/home')->with([
            'problemsCount' => $problemsCount,
            'councilsCount' => $councilsCount,
            'suburbsCount' => $suburbsCount
        ]);
    }
}
