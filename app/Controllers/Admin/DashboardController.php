<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdminModel;

class DashboardController extends BaseController
{
    public function dashboard()
    {
        return view('adminpage/dashboard');
    }
    
}
