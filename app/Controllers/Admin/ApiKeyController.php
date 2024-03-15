<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdminModel;

class ApiKeyController extends BaseController
{
    public function index()
    {
        return view('adminpage/apikey/index');
    }

}
