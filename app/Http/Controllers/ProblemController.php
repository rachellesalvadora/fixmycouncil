<?php

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
