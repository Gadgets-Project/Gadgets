<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipmentAdminModel extends Model
{
    protected $table = "equipment_inventory";

    protected $allowedFields = ['equipment_id', 'equipment_type', 'brand', 'serial_number', 'model', 'equipment_status'];

    protected $returnType = \App\Entities\EquipmentAdmin::class;


}