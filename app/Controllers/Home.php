<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function index(): string
    {
        $usuarioModel = new UsuarioModel();
        $data['usuario'] = $usuarioModel->findAll();

        return view('usuarios/index', $data);
    }
}
