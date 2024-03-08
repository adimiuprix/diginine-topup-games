<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminController extends BaseController
{
    public function dashboard()
    {
        return view('adminpage/dashboard');
    }
    
}
