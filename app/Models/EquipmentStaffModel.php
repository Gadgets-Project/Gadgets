<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipmentStaffModel extends Model
{
    protected $table = "available_equipment";

    protected $allowedFields = ['equipment_id', 'equipment_type', 'brand', 'serial_number', 'model'];
    protected $returnType = \App\Entities\EquipmentStaff::class;

}