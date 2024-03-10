<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ProductModel;
use App\Models\ItemModel;
class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $prodResult = $productModel->findAll();

        return view('adminpage/product/index', compact('prodResult'));
    }

    public function addNew()
    {
        $productModel = new ProductModel();
        $prodResult = $productModel->findAll();

        $ItemModel = new ItemModel();
        $items = $ItemModel->findAll();

        return view('adminpage/product/add', compact('prodResult', 'items'));
    }

    public function store(){
        $validation = \Config\Services::validation();
            $validation->setRules([
                'catitem' => 'required',
                'product' => 'required',
                'code' => 'required|is_unique[products.code_product]',
                'price' => 'required',
                'item' => 'required',
        ]);

        if ($validation->withRequest($this->request)->run()) {
            $dataPost= [
                // Ambil data dari form yang diposting
                'id_item' => $this->request->getPost('catitem'),
                'name_product' => $this->request->getPost('product'),
                'code_product' => $this->request->getPost('code'),
                'price' => $this->request->getPost('price'),
                'item' => $this->request->getPost('item'),
            ];

            $productModel = new ProductModel();
            $productModel->insert($dataPost);

            return redirect()->to('admin/products/');
        }else{
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $productModel = new ProductModel();
        $ItemModel = new ItemModel();
        $items = $ItemModel->findAll();

        $prodDetail = $productModel
            ->join('items', 'items.id = products.id_item')
            ->find($id);

        return view('adminpage/product/edit', compact('items', 'prodDetail', 'id'));
    }

    public function update($id)
    {
        // Inisiasi model
        $productModel = new ProductModel(); // Sesuaikan dengan nama model Anda

        // Lakukan update ke database menggunakan model
        $productModel->update($id, [
            'id_item' => $this->request->getPost('catitem'),
            'name_product' => $this->request->getPost('product'),
            'code_product' => $this->request->getPost('code'),
            'price' => $this->request->getPost('price'),
            'item' => $this->request->getPost('item')
        ]);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->to(base_url('admin/products/'));
    }

    public function remove($id)
    {
        $productModel = new ProductModel();

        $data = $productModel->find($id);

        if ($data) {
            $productModel->delete($id);

            return redirect()->to('admin/products/')->with('success', 'Data deleted');
        } else {
            return redirect()->to('admin/products/')->with('error', 'Data error, cant delete specified data');
        }
    }
}
