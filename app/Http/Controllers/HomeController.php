<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * View Home Page
     */
    public function index()
    {
        return view('pages/home');
    }
}
