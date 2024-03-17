<?php

namespace App\Models;

use CodeIgniter\Model;

class InvoiceModel extends Model
{
    protected $table            = 'invoices';
    protected $primaryKey       = 'id_invoice';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_buyer',
        'id_player',
        'server',
        'hash_transaction',
        'category',
        'service',
        'methods_pay',
        'price',
        'order_status',
        'sku_code',
        'login_via',
        'uid_nickname',
        'account_detail',
        'password',
        'req_heroword',
        'notice',
        'user_id',
        'server',
        'nick_user_ig',
        'comentary',
        'gift_skin',
        'hour_tournament',
        'date_tournament',
    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
