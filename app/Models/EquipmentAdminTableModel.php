<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipmentAdminTableModel extends Model
{
    protected $table = "equipment";

    protected $allowedFields = ['equipment_id', 'equipment_type', 'brand', 'serial_number', 'model', 'equipment_status_id', 'equipment_type_id'];

    protected $returnType = \App\Entities\EquipmentAdmin::class;

    protected $validationRules = [
        'equipment_id' => 'required',
        'equipment_type' => 'required',
        'brand' => 'required',
        'serial_number' => 'required',
        'model' => 'required',
        'equipment_status_id' => 'required',
        'equipment_type_id' => 'required'
    ];

    protected $validationMessages = [
        'equipment_id' => [
            'required' => 'Please enter the equipment ID'
        ],
        'equipment_type' => [
            'required' => 'Please enter the equipment type'
        ],
        'brand' => [
            'required' => 'Please enter the brand'
        ],
        'serial_number' => [
            'required' => 'Please enter the serial number'
        ],
        'model' => [
            'required' => 'Please enter the model'
        ],
        'equipment_status_id' => [
            'required' => 'Please enter the equipment status'
        ], 
        'equipment_type_id' => [
            'required' => 'Please enter the equipment type ID'
        ]
    ];
}