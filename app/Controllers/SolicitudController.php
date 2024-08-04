<?php

namespace App\Controllers;

use App\Models\SolicitudModel;

class SolicitudController extends BaseController
{
    public function index()
    {
        $model = new SolicitudModel();
        $data['solicitudes'] = $model->findAll();
        return view('solicitudes/index', $data);
    }

    public function create()
    {
        return view('solicitudes/create');
    }

    public function store()
    {
        $model = new SolicitudModel();
        $data = [
            'id_Usuario' => $this->request->getPost('id_Usuario'),
            'id_permiso' => $this->request->getPost('id_permiso'),
            'fecha_inicio' => $this->request->getPost('fecha_inicio'),
            'fecha_termino' => $this->request->getPost('fecha_termino'),
            'hora_inicio' => $this->request->getPost('hora_inicio'),
            'hora_termino' => $this->request->getPost('hora_termino'),
            'id_estado' => $this->request->getPost('id_estado'),
            'motivo' => $this->request->getPost('motivo'),
            'fecha_solicitud' => date('Y-m-d H:i:s')
        ];
        $model->save($data);
        return redirect()->to('/solicitudes');
    }

    public function edit($id)
    {
        $model = new SolicitudModel();
        $data['solicitud'] = $model->find($id);
        return view('solicitudes/edit', $data);
    }

    public function update($id)
    {
        $model = new SolicitudModel();
        $data = [
            'id_Usuario' => $this->request->getPost('id_Usuario'),
            'id_permiso' => $this->request->getPost('id_permiso'),
            'fecha_inicio' => $this->request->getPost('fecha_inicio'),
            'fecha_termino' => $this->request->getPost('fecha_termino'),
            'hora_inicio' => $this->request->getPost('hora_inicio'),
            'hora_termino' => $this->request->getPost('hora_termino'),
            'id_estado' => $this->request->getPost('id_estado'),
            'motivo' => $this->request->getPost('motivo')
        ];
        $model->update($id, $data);
        return redirect()->to('/solicitudes');
    }

    public function delete($id)
    {
        $model = new SolicitudModel();
        $model->delete($id);
        return redirect()->to('/solicitudes');
    }
}
