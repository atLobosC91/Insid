<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect()->to('/');
        }

        return view('dashboard', ['user' => $user]);
    }
}
