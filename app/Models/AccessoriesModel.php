<?php

namespace App\Models;

use CodeIgniter\Model;

class AccessoriesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'accessories';
    protected $primaryKey       = 'accessories_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['accessories_id', 'accessories_title', 'accessories_price', 'accessories_img', 'accessories_price', 'accessories_price_discount'];
}
