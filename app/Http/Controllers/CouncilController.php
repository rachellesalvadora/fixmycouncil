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
use App\Models\Council;

class CouncilController extends Controller
{
    /**
     * View Council Page
     */
    public function index()
    {
        $councils = Council::orderBy('name', 'ASC')->with('problems')->with('suburbs')->get();

        return view('pages/council')->with('councils', $councils);
    }

    /**
     * Show council information
     */
    public function showCouncil(Request $request, $id)
    {
        $council = Council::with('problems')->find($id);

        return view('pages/council-info')->with('council', $council);
    }
}
