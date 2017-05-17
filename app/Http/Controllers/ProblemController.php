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
use Illuminate\Support\Facades\Storage;

class ProblemController extends Controller
{
    /**
     * View List of Problems Page
     */
    public function index()
    {
        $problems = Problem::with('council')->with('suburb')->get();

        return view('pages/problem-home')->with('problems', $problems);
    }

    /**
     * View a problem based on ID
     */
    public function view(Request $request, $problemId)
    {
        $problem = Problem::find($problemId);

        $problemImage = Storage::url('public/uploads/' . $problem->image);

        return view('pages/problem-view')->with([
            'problem' => $problem,
            'problemImage' => $problemImage
        ]);
    }

    /**
     * Update a problem step 1
     */
    public function updateProblemStep1()
    {
        $problems = Problem::with('council')->with('suburb')->get();

        return view('pages/problem-update')->with('problems', $problems);
    }

    /**
     * Update a problem step 2
     */
    public function updateProblemStep2(Request $request)
    {
        $problems = Problem::all();

        return view('pages/problem-update-step2')->with('problems', $problems);
    }
}
