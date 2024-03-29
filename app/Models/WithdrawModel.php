<?php

namespace App\Models;

use CodeIgniter\Model;

class WithdrawModel extends Model
{
    protected $table            = 'withdraws';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id', 'amount', 'bank_to', 'hash', 'create_at'];
}
