<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\InvoiceModel;
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

        $userModel = new UsersModel();
        $username = $session->get('username');
        $wa_number = $userModel->findAll();

        $InvoiceModel = new InvoiceModel();

        $totInvoice = $InvoiceModel->where('id_buyer', $userData)->countAllResults();
        $procesingInvoice = $InvoiceModel->where('id_buyer', $userData)->where('order_status', 'pending')->countAllResults();
        $successInvoice = $InvoiceModel->where('id_buyer', $userData)->where('order_status', 'success')->countAllResults();
        $failInvoice = $InvoiceModel->where('id_buyer', $userData)->where('order_status', 'failed')->countAllResults();

        $invoices = $InvoiceModel
            ->where('id_buyer', $userData)
            ->join('items', 'items.id = invoices.service')
            ->findAll();

        return view('userpage/user-area', compact('setting', 'username', 'wa_number', 'totInvoice', 'procesingInvoice', 'successInvoice', 'failInvoice', 'invoices'));
    }

    public function topupBalance(){
        
    }
}
