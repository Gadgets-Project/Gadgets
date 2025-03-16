<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipmentStaffModel extends Model
{
    protected $table = "available_equipment";

    protected $allowedFields = ['equipment_id', 'equipment_type', 'brand', 'serial_number', 'model'];
    protected $returnType = \App\Entities\EquipmentStaff::class;

    protected $validationRules = [
        "equipment_id" => "required",
        "equipment_type" => "required",
        "brand" => "required",
        "serial_number" => "required",
        "model" => "required"
    ];

    protected $validationMessages = [
        "equipment_id" => [
            "required" => "Please enter the equipment ID",
        ],
        "equipment_type" => [
            "required" => "Please enter the equipment type",
        ],
        "brand" => [
            "required" => "Please enter the brand",
        ],
        "serial_number" => [
            "required" => "Please enter the serial number",

        ],
        "model" => [
            "required" => "Please enter the model",

        ]
    ];
}