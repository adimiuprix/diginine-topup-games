<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\FaqModel;
class FaqsController extends BaseController
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

        $faqsModel = new FaqModel();
        $faqsSection = $faqsModel->get()->getResult();

        return view('faqs', compact('setting', 'user_id', 'faqsSection'));
    }
}
