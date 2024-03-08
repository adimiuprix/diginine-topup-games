<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $catsdata = $categoryModel->findAll();

        return view('adminpage/category/index', compact('catsdata'));
    }
}
