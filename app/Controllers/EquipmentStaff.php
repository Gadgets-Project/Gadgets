<?php
// filepath: c:\Users\oadam\gadgets\Gadgets\app\Models\ArticleModel.php
namespace App\Models;

use CodeIgniter\Model;

class EquipmentStaffModel extends Model
{
    protected $table = 'available_equipment';
    protected $primaryKey = 'id';
    protected $allowedFields = ['equipment_id', 'equipment_type', 'brand', 'serial_number', 'model'];
}