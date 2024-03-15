<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\Admin\ItemModel;
class ItemsController extends BaseController
{
    public function index()
    {
        $ItemModel = new ItemModel();
        $items = $ItemModel->findAll();

        return view('adminpage/item/index', compact('items'));
    }

    public function addNew()
    {
        $productModel = new ItemModel();
        $prodResult = $productModel->findAll();

        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();

        return view('adminpage/item/add', compact('categories'));
    }

    public function store(){
        $itemName = $this->request->getPost('item_name');
        $slug = url_title($itemName, '-', true);

        $imageItem = $this->request->getFile('image_item');;

        $blogImage = $this->request->getPost('blog_img');
        $breadcrumbImage = $this->request->getPost('breadcrumb_img');

        $dataPost = [
            // Ambil data dari form yang diposting
            'id_cats' => $this->request->getPost('items'),
            'item_name' => $itemName,
            'status' => 'enable',
            'slug' => $slug,
            'description' => $this->request->getPost('description'),
            'vendor' => $this->request->getPost('vendor'),
            'coloum' => $this->request->getPost('coloum'),
            'image' => $imageItem,
            'blog_image' => '',
            'breadcrumb' => '',
        ];
        $productModel = new ItemModel();
        $productModel->insert($dataPost);

        return redirect()->to('admin/items/');
    }

    public function edit($id)
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();

        $ItemModel = new ItemModel();
        $items = $ItemModel->find($id);
        return view('adminpage/item/edit', compact('items', 'categories'));
    }

    public function update($id)
    {
        $itemName = $this->request->getPost('item_name');
        $imageItem = $this->request->getFile('image_item');;

        // Inisiasi model
        $ItemModel = new ItemModel(); // Sesuaikan dengan nama model Anda

        // Lakukan update ke database menggunakan model
        $ItemModel->update($id, [
            'id_cats' => $this->request->getPost('items'),
            'item_name' => $itemName,
            'status' => 'enable',
            'slug' => url_title($itemName, '-', true),
            'description' => $this->request->getPost('description'),
            'vendor' => $this->request->getPost('vendor'),
            'coloum' => $this->request->getPost('coloum'),
            'image' => $imageItem,
            'blog_image' => '',
            'breadcrumb' => '',
        ]);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->to(base_url('admin/items/'));
    }

    public function remove($id)
    {
        $productModel = new ItemModel();

        $data = $productModel->find($id);

        if ($data) {
            $productModel->delete($id);

            return redirect()->to('admin/items/')->with('success', 'Data deleted');
        } else {
            return redirect()->to('admin/items/')->with('error', 'Data error, cant delete specified data');
        }
    }

}
