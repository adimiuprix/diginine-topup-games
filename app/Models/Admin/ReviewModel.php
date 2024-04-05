<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table            = 'reviews';
    protected $primaryKey       = 'id_revs';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'review', 'number_wa', 'rating'];

    protected bool $allowEmptyInserts = false;
}
