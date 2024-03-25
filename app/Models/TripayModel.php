<?php

namespace App\Models;

use CodeIgniter\Model;

class TripayModel extends Model
{
    protected $table            = 'tripay_apis';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['merchant_id', 'api_key', 'private_key'];

    protected bool $allowEmptyInserts = false;
}
