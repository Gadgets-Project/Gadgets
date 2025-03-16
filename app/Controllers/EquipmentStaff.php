<?php

namespace App\Controllers;


use App\Models\EquipmentStaffModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class EquipmentStaff extends BaseController
{
    protected $viewModel;
    protected $model;

    public function __construct()
    {
        $this->viewModel = new EquipmentStaffModel();
        
    }

    public function index()
    {
        $data['equipment'] = $this->viewModel->orderBy('equipment_id', 'ASC')->findAll();
        return view('EquipmentStaff/index', $data);
    }

    public function show($id)
    {
        $equipment = $this->viewModel->find($id);
        if (!$equipment) {
            throw new PageNotFoundException("Equipment with ID $id not found");
        }
        $data['equipment'] = $equipment;
        return view('EquipmentStaff/show', $data);
    }
}




