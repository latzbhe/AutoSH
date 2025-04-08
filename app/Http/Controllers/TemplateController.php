<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    // Define the index method
    public function index()
    {
        // Logic for the index page
        return view('frontend.home'); // or whatever you want to return
    }
}

