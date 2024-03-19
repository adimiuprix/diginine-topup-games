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

        return view('adminpage/favourite/index', compact('favourites'));
    }

    public function addNew(){
        $itemModel = new ItemModel();
        $items = $itemModel->findAll();
        return view('adminpage/favourite/add', compact('items'));
    }

    public function store(){
        $favModel = new FavouriteModel();

        $targetPath = 'public/uploads/favourite/';
        $upload = $this->request->getFile('popular_image');
        $upload->move($targetPath);

        $dataPost = [
            // Ambil data dari form yang diposting
            'section' => $this->request->getPost('tofav'),
            'image_fav' => $upload->getName()
        ];

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
        $favModel = new FavouriteModel();

        $img = $this->request->getFile('popular_image');
        $sectionNum = $this->request->getPost('tofav');

        if ($img && $img->getClientExtension() == 'png') {
            $destination = ROOTPATH . 'public/uploads/favourite';
            $newName = $img->getRandomName();
            $oldImage = $favModel->find($id)['image_fav'];
            if ($oldImage && file_exists($destination . '/' . $oldImage)) {
                unlink($destination . '/' . $oldImage);
            }
            $img->move($destination, $newName);
            $favModel->update($id, ['image_fav' => $newName]);
        }

        if ($sectionNum) {
            $favModel->update($id, [
                'section' => $sectionNum,
                'image_fav' => $newName,
            ]);
        }

        return redirect()->to(base_url('admin/favourite/'));
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
