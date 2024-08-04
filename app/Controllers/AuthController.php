<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $session = session();
        $model = new UsuarioModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $model->where('Email', $email)->first();

        if ($user) {
            $pass = $user['Pass'];
            $authPass = password_verify($password, $pass);
            if ($authPass) {
                $session->set([
                    'id' => $user['ID'],
                    'email' => $user['Email'],
                    'nombres' => $user['Nombres'],
                    'apellidos' => $user['Apellidos'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
