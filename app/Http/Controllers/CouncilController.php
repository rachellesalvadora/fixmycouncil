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
        $councils = Council::all();

        return view('pages/council')->with('councils', $councils);
    }

    /**
     * Show council information
     */
    public function showCouncil(Request $request, $id)
    {
        $council = Council::find($id);

        return view('pages/council-info')->with('council', $council);
    }
}
