<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function index()
    {
        $model = new UsuarioModel();
        $data['usuario'] = $model->findAll();
        return view('usuarios/index', $data);
    }

    public function create()
    {
        return view('usuarios/create');
    }

    public function store()
    {
        $model = new UsuarioModel();
        $data = [
            'Nombres' => $this->request->getPost('Nombres'),
            'Apellidos' => $this->request->getPost('Apellidos'),
            'Email' => $this->request->getPost('Email'),
            'Pass' => password_hash((string)$this->request->getPost('Pass'), PASSWORD_DEFAULT),
            'Fecha_creacion' => date('Y-m-d H:i:s'),
            'ID_Rol' => $this->request->getPost('ID_Rol')
        ];
        $model->save($data);
        return redirect()->to('/usuarios');
    }

    public function edit($id)
    {
        $model = new UsuarioModel();
        $data['usuario'] = $model->find($id);
        return view('usuarios/edit', $data);
    }

    public function update($id)
    {
        $model = new UsuarioModel();
        $data = [
            'Nombres' => $this->request->getPost('Nombres'),
            'Apellidos' => $this->request->getPost('Apellidos'),
            'Email' => $this->request->getPost('Email'),
            'Pass' => password_hash((string)$this->request->getPost('Pass'), PASSWORD_DEFAULT),
            'Fecha_modificacion' => date('Y-m-d H:i:s'),
            'ID_Rol' => $this->request->getPost('ID_Rol')
        ];
        $model->update($id, $data);
        return redirect()->to('/usuarios');
    }

    public function delete($id)
    {
        $model = new UsuarioModel();
        $model->delete($id);
        return redirect()->to('/usuarios');
    }
}
