<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\UsersModel;
use App\Models\Admin\ReviewModel;

class Login extends BaseController
{
    private $setting;
    private $reviews;

    public function __construct()
    {
        $GeneralSetting = new SettingModel();
        $this->setting = $GeneralSetting->first();

        $reviewModel = new ReviewModel();
        $this->reviews = $reviewModel->findAll();
    }

    public function index()
    {
        $setting = $this->setting;
        $reviews = $this->reviews;
        
        $session = session();
        $user_id = $session->get('user_id');

        return view('auth/login', compact('setting', 'user_id', 'reviews'));
    }

    public function userAuthorization(){
        $request = service('request');
        $UserLogin = $request->getPost('userlogin');
        $password = $request->getPost('password');

        $userModel = new UsersModel();

        // Cek apakah pengguna menggunakan email atau username untuk login
        $user = $userModel->where('email', $UserLogin)->orWhere('username', $UserLogin)->orWhere('whatsapp_number', $UserLogin)->first();
        if ($user && password_verify($password, $user['password'])) {
            // Login berhasil
            // Simpan data sesi
            $session = session();
            $userData = [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'logged_in' => true
            ];
            $session->set($userData);
            return redirect()->to('/dashboard');
        } else {
            // Login gagal
            // Tampilkan pesan error atau redirect kembali ke halaman login
            return redirect()->back()->with('error', 'Login gagal. Periksa kembali email/username dan password Anda.');
        }
    }

    public function logout()
    {
        // Menghapus data sesi pengguna
        $session = session();
        $session->destroy();
    
        // Redirect pengguna ke halaman login
        return redirect()->to('login');
    }
}
