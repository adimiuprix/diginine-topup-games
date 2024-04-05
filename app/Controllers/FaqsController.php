<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\FaqModel;
use App\Models\Admin\ReviewModel;

class FaqsController extends BaseController
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
        $reviewModel = new ReviewModel();

        $setting = $this->setting;
        $reviews = $this->reviews;

        $session = session();
        $user_id = $session->get('user_id');

        $faqsModel = new FaqModel();
        $faqsSection = $faqsModel->get()->getResult();

        return view('faqs', compact('setting', 'user_id', 'faqsSection', 'reviews'));
    }
}
