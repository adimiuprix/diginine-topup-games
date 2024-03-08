<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $prodResult = $productModel->findAll();

        return view('adminpage/product/index', compact('prodResult'));
    }
}
