<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'course', 'year'];

    protected $useTimestamps = true;

    // OPTIONAL: disable first to avoid confusion
    protected $useSoftDeletes = false;
}