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

    // Meng update data tanpa parameter
    public function update()
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
}
