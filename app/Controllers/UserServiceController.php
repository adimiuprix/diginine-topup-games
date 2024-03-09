<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\UsersModel;

class UserServiceController extends BaseController
{
    private $setting;
    public function __construct(){
        $GeneralSetting = new SettingModel();
        $this->setting = $GeneralSetting->first();
    }


    public function index()
    {   
        $setting = $this->setting;
        $session = session();
        $userData = $session->get('user_id');

        return view('userpage/dashboard', compact('setting'));
    }
}
