<?php

namespace App\Models;

use CodeIgniter\Model;

class JumlahDesaModel extends Model
{
    protected $table = 'jumlah_Desa';
    protected $primarykey = 'id';
    protected $allowedFields = [
        'id', 'jumlah_desa', 'kecamatan'
    ];
    protected $returnType = 'App\Entities\JumlahDesa';
    protected $useTimestamps = false;
}
