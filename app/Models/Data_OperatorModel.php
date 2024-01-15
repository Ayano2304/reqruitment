<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_OperatorModel extends Model
{
    protected $table = 'data_operator';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'ktp',
        'alamat',
        'kota',
        'provinsi',
        'tempat_lahir',
        'tgl_lahir',
        'kelamin',
        'status_nikah',
        'posisi'
    ];
}
