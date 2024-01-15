<?php 

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model{
    protected $table = 'staff_jobs';
    protected $primaryKey='id';
    protected $allowedFields = [
        'job_title',
        'description',
        'expired_date'
    ];
}