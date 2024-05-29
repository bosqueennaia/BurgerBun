<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Menu extends Controller
{
    public function menu()
    {
        return view('menu/menu');
    }
}
