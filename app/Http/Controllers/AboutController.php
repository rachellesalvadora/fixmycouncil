<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * View About Page
     */
     public function index()
    {
        return view('pages/about');
    }
}
