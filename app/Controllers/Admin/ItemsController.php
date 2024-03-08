<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ItemModel;
class ItemsController extends BaseController
{
    public function index()
    {
        $ItemModel = new ItemModel();
        $items = $ItemModel->findAll();

        return view('adminpage/item/index', compact('items'));
    }
}
