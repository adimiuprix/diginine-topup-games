<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;

class ContactController extends BaseController
{
    private $setting;
    public function __construct(){
        $GeneralSetting = new SettingModel();
        $this->setting = $GeneralSetting->first();
    }

    public function index(){
        $setting = $this->setting;

        $session = session();
        $user_id = $session->get('user_id');

        return view('contact', compact('setting', 'user_id'));

    }
}
