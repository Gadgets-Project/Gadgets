<?php

namespace App\Controllers;

use App\Models\EquipmentAdminTableModel;
use App\Models\EquipmentAdminModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class EquipmentAdmin extends BaseController
{
    protected $viewModel;
    protected $model;

    public function __construct()
    {
        $this->viewModel = new EquipmentAdminModel();
        $this->model = new EquipmentAdminTableModel();
    }

    public function index()
    {
        $data['equipment'] = $this->viewModel->findAll();
        return view('EquipmentAdmin/index', $data);
    }

    public function show($id)
    {
        $equipment = $this->viewModel->find($id);
        if (!$equipment) {
            throw new PageNotFoundException("Equipment with ID $id not found");
        }
        $data['equipment'] = $equipment;
        return view('EquipmentAdmin/show', $data);
    }

    public function new()
    {
        return view('EquipmentAdmin/new');
    }

    public function create()
    {
        $data = $this->request->getPost();
        if ($this->model->save($data)) {
            return redirect()->to('/equipmentadmin')->with('message', 'Equipment created successfully');
        }
        return redirect()->back()->withInput()->with('errors', $this->model->errors());
    }

    public function edit($id)
    {
        $equipment = $this->model->find($id);
        if (!$equipment) {
            throw new PageNotFoundException("Equipment with ID $id not found");
        }
        $data['equipment'] = $equipment;
        return view('EquipmentAdmin/edit', $data);
    }

    public function update($id)
    {
        $equipment = $this->model->find($id);
        if (!$equipment) {
            throw new PageNotFoundException("Equipment with ID $id not found");
        }

        $data = $this->request->getPost();
        if ($this->model->update($id, $data)) {
            return redirect()->to('/equipmentadmin/' . $id)->with('message', 'Equipment updated successfully');
        }
        return redirect()->back()->withInput()->with('errors', $this->model->errors());
    }

    public function confirmDelete($id)
    {
        $equipment = $this->model->find($id);
        if (!$equipment) {
            throw new PageNotFoundException("Equipment with ID $id not found");
        }
        $data['equipment'] = $equipment;
        return view('EquipmentAdmin/delete', $data);
    }

    public function delete($id)
    {
        $equipment = $this->model->find($id);
        if (!$equipment) {
            throw new PageNotFoundException("Equipment with ID $id not found");
        }

        $this->model->delete($id);
        return redirect()->to('/equipmentadmin')->with('message', 'Equipment deleted successfully');
    }
}