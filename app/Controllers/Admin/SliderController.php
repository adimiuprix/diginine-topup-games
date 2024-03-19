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
        // Lakukan update ke database menggunakan model
        $sliderModel->update($id, [
            'order_status' => $this->request->getPost('status'),
        ]);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->to(base_url('admin/slider/'));
    }

}
