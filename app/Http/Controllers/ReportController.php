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
use App\Models\Postcode;
use App\Models\Suburb;
use App\models\Council;
use App\Models\Problem;
use Session;

class ReportController extends Controller
{   
    /*
     * Step 1 get the postcode to search
     */
    public function step1()
    {
        return view('pages/step1');
    }

    /*
     * Step 2 get the suburb and council
     */
    public function step2(Request $request)
    {
        $postcodeSubmitted = $request->input('postcode');

        // Get postcode from database based on what was submitted
        $postcode = Postcode::where('postcode', $postcodeSubmitted)->first();

        // Redirect to step 1 if postcode doesn't exist
        if (!$postcode) {
            Session::flash('message', 'This postcode doesn\'t exist! try again.'); 
            return redirect()->route('report.step1');
        }

        $suburbs = Suburb::where('postcode_id', $postcode->id)->get();

        // Redirect to step 1 if suburb is not in database
        if ($suburbs->isEmpty()) {
            Session::flash('message', 'There is no suburb attached to this postcode! try again.'); 
            return redirect()->route('report.step1');
        }

        return view('pages/step2')->with(
            [
                'postcode' => $postcodeSubmitted,
                'suburbs' => $suburbs
            ]
        );
    }

    /*
     * Step 3 get the details to submit
     */
    public function step3(Request $request)
    {
        $suburbId = $request->input('suburb');

        // If there is no suburb id posted, return to step 2
        if (!$suburbId) {
            Session::flash('message', 'Please choose a suburb');
            return redirect()->route('report.step2');
        }

        $suburbs = Suburb::find($suburbId);
        $postcodeSubmitted = $request->input('postcodeSubmitted');

        return view('pages/step3')->with(
            [
                'postcode' => $postcodeSubmitted,
                'suburbName' => $suburbs->name,
                'councilId' => $suburbs->council_id,
                'suburbId' => $suburbId
            ]
        );
    }

    /*
     * Save the form submission to the database
     */
    public function submit(Request $request)
    {
        // Get the submitted data and store in variable
        // @TODO: Check if values aren't empty
        $suburbId = $request->input('suburbId');
        $councilId = $request->input('councilId');
        $problemTitle = $request->input('problemTitle');
        $problemDescription = $request->input('problemDescription');
        $problemName = $request->input('problemName');
        $problemImage = $request->file('problemImage')->store('public/uploads');
        $problemImageName = $request->file('problemImage')->hashName();

        // Create new problem object
        $problem = new Problem;

        // Set the property for each required field
        $problem->suburb_id = $suburbId;
        $problem->council_id = $councilId;
        $problem->title = $problemTitle;
        $problem->description = $problemDescription;
        $problem->image = $problemImageName;
        $problem->person_name = $problemName;
        $problem->status = 1;

        // Create new problem in database
        $problem->save();

        if (!$problem) {
            Session::flash('message', 'There was a problem submitting your form! Please try again!');
            return redirect()->route('report.error');
        }
        else {
            Session::flash('message', 'You\'ve successfully completed your submission!');
            return redirect()->route('report.success');
        }
    }

    /*
    * Render successful submission page
     */
    public function success()
    {
        return view('pages/report-success');
    }

    /*
    * Render error page
     */
    public function error()
    {
        return view('pages/report-error');
    }
}
