<?php

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
