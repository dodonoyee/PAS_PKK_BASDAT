<?php

namespace App\Models;

use CodeIgniter\Model;

class PrinterModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'printer';
    protected $primaryKey       = 'printer_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['printer_id', 'printer_title', 'printer_price', 'printer_img', 'printer_price', 'printer_price_discount'];
}
