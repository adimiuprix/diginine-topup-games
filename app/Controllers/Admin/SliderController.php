<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\SliderModel;

class SliderController extends BaseController
{
    public function index()
    {
        $sliderModel = new SliderModel();
        $sliders = $sliderModel->findAll();

        return view('adminpage/slider/index', compact('sliders'));
    }

    public function addNew()
    {
        return view('adminpage/slider/add');
    }

    public function store()
    {
        $targetPath = 'public/uploads/banners/';
        $upload = $this->request->getFile('slide');
        $upload->move($targetPath);

        $data = [
            'link' => $this->request->getPost('linkto'),
            'image' => $upload->getName()
        ];
        $sliderModel = new SliderModel();
        $sliderModel->insert($data);

        return redirect()->to('admin/sliders');
    }

    public function edit($id){
        $sliderModel = new SliderModel();
        $slideData = $sliderModel->find($id);
        return view('adminpage/slider/edit', compact('slideData'));
    }

    public function update($id)
    {
        // Inisiasi model
        $sliderModel = new SliderModel();

        function processImage($img, $destination, $fieldName, $sliderModel, $id) {
            if ($img->getClientExtension() === 'png') {
                $newName = $img->getRandomName();

                // Menghapus file lama jika ada
                $oldImage = $sliderModel->find($id)[$fieldName];
                if ($oldImage && file_exists($destination . '/' . $oldImage)) {
                    unlink($destination . '/' . $oldImage);
                }

                $img->move($destination, $newName);
                $sliderModel->update($id, [
                    $fieldName => $newName,
                ]);
            }
        }

        $img = $this->request->getFile('slide');
        $destination = ROOTPATH . 'public/uploads/banners';
        processImage($img, $destination, 'image', $sliderModel, $id);

        // Lakukan update ke database menggunakan model
        $sliderModel->update($id, [
            'link' => $this->request->getPost('linkto'),
        ]);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->to(base_url('admin/sliders/'));
    }

    public function remove($id)
    {
        $sliderModel = new SliderModel();
        $destination = ROOTPATH . 'public/uploads/banners';
        $data = $sliderModel->find($id);
        $dataImage = $data['image'];

        if ($data && file_exists($destination . '/' . $dataImage)) {
            unlink($destination . '/' . $dataImage);
            $sliderModel->delete($id);
            return redirect()->to('admin/sliders/')->with('success', 'Data deleted');
        } else {
            return redirect()->to('admin/sliders/')->with('error', 'Data error, cant delete specified data');
        }
    }

}
