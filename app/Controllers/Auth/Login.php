<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\UsersModel;

class Login extends BaseController
{
    private $setting;

    public function __construct()
    {
        $GeneralSetting = new SettingModel();
        $this->setting = $GeneralSetting->first();
    }

    public function index()
    {
        $setting = $this->setting;
        return view('auth/login', compact('setting'));
    }

    public function userAuthorization(){
        // Mendapatkan input dari form login
        $email = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Melakukan validasi pada input
        $validation = $this->validate([
            'username' => 'required',
            'password' => 'required|min_length[8]'
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembali ke halaman login dengan error
            session()->setFlashdata('error', 'Invalid email or password');
            return redirect()->to('login')->withInput();
        }

        // Mencari user dengan email yang diberikan
        $userModel = new UsersModel();
        $user = $userModel->where('username', $email)->first();

        if (!$user) {
            // Jika data validasi tidak ditemukan, kembali ke halaman login dengan error
            session()->setFlashdata('error', 'Invalid email or password');
            return redirect()->back()->withInput();
        }

        // Memeriksa apakah password yang diberikan sesuai dengan yang tersimpan di database
        if (!password_verify($password, $user['password'])) {
            // Jika password tidak sesuai, kembali ke halaman login dengan error
            session()->setFlashdata('error', 'Invalid email or password');
            return redirect()->back()->withInput();
        }

        // Jika user ditemukan dan password sesuai, buat session dan redirect ke halaman dashboard
        session()->set([
            'iduser' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'logged_in' => true
        ]);

        return redirect()->to('dashboard');
    }
}
