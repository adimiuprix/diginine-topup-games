<?php
namespace App\Models;

use CodeIgniter\Model;

class ApiGameModel extends Model
{
    protected $table = 'api_games';
    protected $allowedFields = ['merchant_id', 'secret_key'];

    // Fungsi untuk mendapatkan data merchant_id dan secret_key
    public function getApiGameData()
    {
        return $this->first(); // Mengambil satu baris data pertama dari tabel
    }

    public function updateData($data)
    {
        // Lakukan update data
        $this->update($data);
    }
}
