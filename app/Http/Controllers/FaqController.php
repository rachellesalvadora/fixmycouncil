<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * View FAQ Page
     */
    public function index()
    {
        return view('pages/faq');
    }
}
