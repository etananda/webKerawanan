<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'data';
    protected $primarykey = 'id';
    protected $allowedFields = [
        'id', 'id_master_data', 'jumlah_desa', 'nilai'
    ];
    protected $returnType = 'App\Entities\Data';
    protected $useTimestamps = false;
}
