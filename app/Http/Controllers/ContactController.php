<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * View Contact Page
     */
    public function index()
    {
        return view('pages/contact');
    }
}
