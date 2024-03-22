<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\Admin\ItemModel;
use CodeIgniter\Files\File;

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
        $productModel = new ItemModel();

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == FALSE) {
            return $this->index();
        } else {
            $targetPath = 'public/';
            $upload = $this->request->getFile('image_item');
            $upload->move($targetPath);
            $data = ['image_item' => $upload->getName()];
            $productModel->insert($data);
        }

        $itemName = $this->request->getPost('item_name');
        $slug = url_title($itemName, '-', true);

        $dataPost = [
            // Ambil data dari form yang diposting
            'id_cats' => $this->request->getPost('items'),
            'item_name' => $itemName,
            'status' => 'enable',
            'slug' => $slug,
            'description' => $this->request->getPost('description'),
            'vendor' => $this->request->getPost('vendor'),
            'coloum' => $this->request->getPost('coloum'),
            'status' => $this->request->getPost('status'),
        ];
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
        // Inisiasi model
        $ItemModel = new ItemModel(); // Sesuaikan dengan nama model Anda

        $itemName = $this->request->getPost('item_name');

        // Lakukan update ke database menggunakan model
        $ItemModel->update($id, [
            'id_cats' => $this->request->getPost('items'),
            'item_name' => $itemName,
            'status' => $this->request->getPost('status'),
            'slug' => url_title($itemName, '-', true),
            'description' => $this->request->getPost('description'),
            'vendor' => $this->request->getPost('vendor'),
            'coloum' => $this->request->getPost('coloum'),
        ]);

        // Fungsi untuk memindahkan dan memperbarui gambar
        function processImage($img, $destination, $fieldName, $ItemModel, $id) {
            if ($img->getClientExtension() === 'png') {
                $newName = $img->getRandomName();

                // Menghapus file lama jika ada
                $oldImage = $ItemModel->find($id)[$fieldName];
                if ($oldImage && file_exists($destination . '/' . $oldImage)) {
                    unlink($destination . '/' . $oldImage);
                }

                $img->move($destination, $newName);
                $ItemModel->update($id, [
                    $fieldName => $newName,
                ]);
            }
        }

        // Proses gambar pertama
        $imgItem = $this->request->getFile('image_item');
        $destination = ROOTPATH . 'public/uploads/items';
        processImage($imgItem, $destination, 'image', $ItemModel, $id);

        // Proses gambar kedua
        $imgBlog = $this->request->getFile('blog_img');
        $destination = ROOTPATH . 'public/uploads/blogs';
        processImage($imgBlog, $destination, 'blog_image', $ItemModel, $id);

        // Proses gambar ketiga
        $imgBreadcrumb = $this->request->getFile('breadcrumb_img');
        $destination = ROOTPATH . 'public/uploads/breadcrumb';
        processImage($imgBreadcrumb, $destination, 'breadcrumb', $ItemModel, $id);

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
