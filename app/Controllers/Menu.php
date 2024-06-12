<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Menu extends BaseController
{
    public function index()
    {
        // Load the model
        $menuModel = new \App\Models\MenuModel();

        // Get all menus
        $data['menus'] = $menuModel->findAll();

        // Load the view
        return view('menu/menu', $data);
    }
}
