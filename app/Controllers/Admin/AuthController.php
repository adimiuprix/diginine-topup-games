<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdminModel;

class AuthController extends BaseController
{
    public function index()
    {
        return view('adminpage/auth/login');
    }

    public function validation()
    {
        $adminModel = new AdminModel();
    
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        $admin = $adminModel->where('email', $email)->first();
    
        if (!$admin || !password_verify((string)$password, $admin['password'])):
            return redirect()->to('/admin/login')->with('error', 'Validasi gagal, periksa kredensial dengan benar.');
        endif;
    
        // Buat session admin
        $session = session();
        $session->set('adminLoggedIn', true);
        $session->set('adminId', $admin['id']);
    
        return redirect()->to('/admin/dashboard');
    }
    
}
