<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class UserServiceController extends BaseController
{
    public function index()
    {   
        $session = session();
        $userData = $session->get('user_id');

        dd($userData);
    }
}
