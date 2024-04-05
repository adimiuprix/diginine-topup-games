<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\UsersModel;
use App\Models\Admin\ReviewModel;

class Register extends BaseController
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

        return view('auth/register', compact('setting', 'user_id', 'reviews'));
    }

    public function registUser(){
        $rules = [
            'username' => 'required|is_unique[users.username]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'whatsapp' => 'required',
            'password' => 'required|min_length[8]|max_length[25]',
        ];

        if(!$this->validate($rules)){
            return view('auth/register', [
                'validation' => $this->validator
            ]);
        };

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'whatsapp_number' => $this->request->getPost('whatsapp'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];

        $userModel = new UsersModel();
        $userModel->insert($data);

        session()->setFlashdata('success', 'Berhasil Daftar, silahkan masuk member');
        return redirect()->to('login');
    }
}
