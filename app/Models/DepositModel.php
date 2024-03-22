<?php

namespace App\Models;

use CodeIgniter\Model;

class DepositModel extends Model
{
    protected $table            = 'user_deposits';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id', 'amount', 'method', 'hash_id', 'reference'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
