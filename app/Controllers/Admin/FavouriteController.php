<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\FavouriteModel;
use App\Models\Admin\ItemModel;
use App\Models\CategoryModel;
class FavouriteController extends BaseController
{
    public function index()
    {
        $favModel = new FavouriteModel();
        $favourites = $favModel->join('items', 'items.id = favourites.section')->get()->getResult();
        // dd($favourites);

        return view('adminpage/favourite/index', compact('favourites'));
    }

    public function addNew(){
        $itemModel = new ItemModel();
        $items = $itemModel->findAll();
        return view('adminpage/favourite/add', compact('items'));
    }

    public function store(){
        $dataPost = [
            // Ambil data dari form yang diposting
            'section' => $this->request->getPost('tofav'),
            'image_fav' => $this->request->getPost('popular_image'),
        ];

        $favModel = new FavouriteModel();
        $favModel->insert($dataPost);

        return redirect()->to('admin/favourite/');
    }

    public function edit($id)
    {
        $itemModel = new ItemModel();
        $items = $itemModel->findAll();

        $favModel = new FavouriteModel();
        $favourites = $favModel->join('items', 'items.id = favourites.section')->find($id);

        return view('adminpage/favourite/edit', compact('favourites', 'items'));
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
