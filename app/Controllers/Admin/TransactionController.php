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
            ->join('users', 'users.id = invoices.id_buyer', 'left outer')
            ->orderBy('id_invoice', 'DESC')
            ->findAll();

        return view('adminpage/transaction/index', compact('invoices'));
    }

    public function edit($id){
        $InvModel = new InvoiceModel();
        $invoiceData = $InvModel
            ->join('users', 'users.id = invoices.id_buyer', 'left')
            ->join('categories', 'categories.id = invoices.category', 'left')
            ->join('products', 'products.id = invoices.service', 'left')
            ->find($id);
        return view('adminpage/transaction/edit', compact('invoiceData'));
    }

    public function update($id)
    {
        // Inisiasi model
        $InvModel = new InvoiceModel();
        // Lakukan update ke database menggunakan model
        $InvModel->update($id, [
            'order_status' => $this->request->getPost('status'),
        ]);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->to(base_url('admin/transactions/'));
    }

}
