<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EmployeeModel;

class Employee extends BaseController
{
    private $employeeModel;

    public function __construct()
    {
        $this->employeeModel = new EmployeeModel();
    }

    public function index()
    {
        $employees = $this->employeeModel->findAll();

        $payload = [
            "employees" => $employees
        ];

        echo view('admin/employee/index', $payload);
    }

    public function new()
    {
        return view('admin/employee/new');
    }

    public function create()
    {
        $photo = $this->request->getFile('photo');

        if ($photo->getSizeByUnit() > 0) {
            $fileName = $photo->getRandomName();
            $photo->move('photos', $fileName);
        }

        $payload = [
            "name" => $this->request->getPost('name'),
            "age" => (int) $this->request->getPost('age'),
            "gender" => $this->request->getPost('gender'),
            "marital_status" => $this->request->getPost('marital_status'),
            "work_schedule" => $this->request->getPost('work_schedule'),
            "position" => $this->request->getPost('position'),
            "photo" => $fileName,
        ];

        $this->employeeModel->insert($payload);
        return redirect()->to('/admin/employee');
    }

    public function edit($id = null)
    {
        $employee = $this->employeeModel->find($id);

        if (!$employee) {
            throw new \Exception("Data not found!");
        }

        return view('admin/employee/edit', ["data" => $employee]);
    }

    public function update($id = null)
    {
        $employee = $this->employeeModel->find($id);

        $fileName = $employee['photo'];
        $photo = $this->request->getFile('photo');

        if ($photo->getSizeByUnit() > 0) {
            $fileName = $photo->getRandomName();
            $photo->move('photos', $fileName);
        }

        $payload = [
            "name" => $this->request->getPost('name'),
            "age" => (int) $this->request->getPost('age'),
            "gender" => $this->request->getPost('gender'),
            "marital_status" => $this->request->getPost('marital_status'),
            "work_schedule" => $this->request->getPost('work_schedule'),
            "position" => $this->request->getPost('position'),
            "photo" => $fileName,
        ];

        $this->employeeModel->update($id, $payload);
        return redirect()->to('/admin/employee');
    }

    public function delete($id = null)
    {
        $this->employeeModel->delete($id);
        return redirect()->to('/admin/employee');
    }
}
