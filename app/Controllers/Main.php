<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        echo view('main/header');
        echo view('main/index');
        echo view('main/footer');
    }

    public function about()
    {
        echo view('main/header');
        echo view('main/about');
        echo view('main/footer');
    }
}

// Permisos.php
namespace App\Controllers;

class Permisos extends BaseController
{
    public function gestion()
    {
        echo view('permisos/gestion');
    }
}
