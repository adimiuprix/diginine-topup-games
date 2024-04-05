<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\Admin\ReviewModel;

class ContactController extends BaseController
{
    private $setting;
    private $reviews;
    public function __construct(){
        $GeneralSetting = new SettingModel();
        $this->setting = $GeneralSetting->first();

        $reviewModel = new ReviewModel();
        $this->reviews = $reviewModel->findAll();
    }

    public function index(){
        $setting = $this->setting;
        $reviews = $this->reviews;
        $reviewModel = new ReviewModel();

        $session = session();
        $user_id = $session->get('user_id');

        return view('contact', compact('setting', 'user_id', 'reviews'));

    }
}
