<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdminModel;
use App\Models\InvoiceModel;
use App\Models\UsersModel;

class DashboardController extends BaseController
{
    public function dashboard()
    {
        $adminDetail = new AdminModel();
        $admin = $adminDetail->first();

        $InvoiceModel = new InvoiceModel();
        $totOrder = $InvoiceModel->countAll();

        $UserModel = new UsersModel();
        $totMember = $UserModel->countAll();

        return view('adminpage/dashboard', compact('admin', 'totOrder', 'totMember'));
    }
}
