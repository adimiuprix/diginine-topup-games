<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class DigiflazzModel extends Model
{
    protected $table            = 'digiflazzs';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['username', 'api_key'];
}
