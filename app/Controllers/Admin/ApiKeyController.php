<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ApiGameModel;
use App\Models\TripayModel;
use App\Models\Admin\DigiflazzModel;

class ApiKeyController extends BaseController
{
    public function index()
    {
        $apiGameModel = new ApiGameModel();
        $tripayModel = new TripayModel();
        $digiFlazz = new DigiflazzModel();

        // Ambil data dari model
        $apiGameData = $apiGameModel->getApiGameData();
        $tripay = $tripayModel->first();
        $digiFlazz = $digiFlazz->first();

        return view('adminpage/apikey/index', compact('apiGameData', 'tripay', 'digiFlazz'));
    }

    // Meng update data tanpa parameter
    public function apigamesupdate()
    {
        $apiGameModel = new ApiGameModel();
        $id = 1;

        // Contoh data yang ingin diupdate
        $data = [
            'merchant_id' => $this->request->getPost('mid'),
            'secret_key' => $this->request->getPost('key'),
        ];

        // Panggil fungsi updateData tanpa menyertakan parameter ID
        $apiGameModel->update($id, $data);

        return redirect()->to('admin/apis');
    }

    public function tripayupdate(){
        $tripayModel = new TripayModel();
        $id = 1;
        $data = [
            'merchant_id' => $this->request->getPost('mcode'),
            'api_key' => $this->request->getPost('apikey'),
            'private_key' => $this->request->getPost('privkey'),
        ];
        $tripayModel->update($id, $data);
        return redirect()->to('admin/apis');
    }

    public function digiflazz(){
        $digiFlazz = new DigiflazzModel();
        $id = 1;
        $data = [
            'username' => $this->request->getPost('dfusrname'),
            'api_key' => $this->request->getPost('dfapikey'),
        ];
        $digiFlazz->update($id, $data);
        return redirect()->to('admin/apis');
    }
}
