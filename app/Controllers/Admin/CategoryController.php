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

    public function addNew()
    {
        return view('adminpage/category/add');
    }

    public function store(){

        $dataPost = [
            // Ambil data dari form yang diposting
            'category' => $this->request->getPost('category'),
        ];
        $categoryModel = new CategoryModel();
        $categoryModel->insert($dataPost);

        return redirect()->to('admin/category/');
    }

    public function edit($id)
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->find($id);
        return view('adminpage/category/edit', compact('categories'));
    }

    public function update($id)
    {
        // Inisiasi model
        $categoryModel = new CategoryModel(); // Sesuaikan dengan nama model Anda

        // Lakukan update ke database menggunakan model
        $categoryModel->update($id, [
            'category' => $this->request->getPost('category'),
        ]);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->to(base_url('admin/category/'));
    }

    public function remove($id)
    {
        $categoryModel = new CategoryModel();

        $data = $categoryModel->find($id);

        if ($data) {
            $categoryModel->delete($id);

            return redirect()->to('admin/category/')->with('success', 'Data deleted');
        } else {
            return redirect()->to('admin/category/')->with('error', 'Data error, cant delete specified data');
        }
    }

}
