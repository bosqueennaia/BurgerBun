<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class About extends Controller
{
    public function about()
    {
        return view('about/about');
    }
}
