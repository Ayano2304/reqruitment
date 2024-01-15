<?php 

namespace App\Models;

use CodeIgniter\Model;

class OperatorModel extends Model{
    protected $table = 'operator_jobs';
    protected $primaryKey='id';
    protected $allowedFields = [
        'job_title',
        'description',
        'expired_date'
    ];
}