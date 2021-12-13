<?php

namespace App\Models;

use CodeIgniter\Model;

class LaptopModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'laptop';
    protected $primaryKey       = 'laptop_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['laptop_id', 'laptop_title', 'laptop_price', 'laptop_img', 'laptop_price', 'laptop_price_discount'];
}
