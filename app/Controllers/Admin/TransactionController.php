<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\InvoiceModel;
class TransactionController extends BaseController
{
    public function index()
    {
        $InvModel = new InvoiceModel();
        $invoices = $InvModel
            ->join('categories', 'categories.id = invoices.category')
            ->join('items', 'items.id = invoices.service')
            ->findAll();

        return view('adminpage/transaction/index', compact('invoices'));
    }
}
