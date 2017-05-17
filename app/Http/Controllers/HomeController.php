<?php

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
