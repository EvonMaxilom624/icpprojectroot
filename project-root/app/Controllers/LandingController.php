<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LandingController extends Controller
{
    public function index()
    {
        // Load the landing page view
        return view('landingpage');
    }
}
