<?php

namespace App\Models;

use CodeIgniter\Model;

class BorrowerModel extends Model
{
    protected $table = 'borrowers'; // Your borrowers table
    protected $primaryKey = 'id'; // Primary key of the borrowers table
    protected $allowedFields = ['first_name', 'last_name', 'email', 'password', 'department_id', 'user_type_id'];
}