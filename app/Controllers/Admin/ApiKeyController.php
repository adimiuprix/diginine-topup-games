<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ApiGameModel;

class ApiKeyController extends BaseController
{
    public function index()
    {
        $apiGameModel = new ApiGameModel();

        // Ambil data dari model
        $apiGameData = $apiGameModel->getApiGameData();
        return view('adminpage/apikey/index', compact('apiGameData'));
    }

    public function update()
    {
        $apiGameModel = new ApiGameModel();

        // Contoh data yang ingin diupdate
        $data = [
            'merchant_id' => $this->request->getPost('mid'),
            'secret_key' => $this->request->getPost('key'),
        ];

        // Panggil fungsi updateData tanpa menyertakan parameter ID
        $apiGameModel->update($data);

        return redirect()->back();
    }
}
