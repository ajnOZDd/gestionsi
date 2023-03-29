<?php

namespace App\Controllers;

class Home_accueil_controller extends BaseController
{
    public function index()
    {
        return view('Home_views');
    }
}