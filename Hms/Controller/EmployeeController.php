<?php

require_once '../Model/EmployeeModel.php';

class EmployeeController
{
    private $model;

    public function __construct()
    {
        $this->model = new EmployeeModel();
    }

    public function index()
    {
        $employees = $this->model->getAllEmployees();
        include '../View/employee_view.php';
    }

    public function edit($id)
    {
        $employee = $this->model->getEmployeeById($id);

        if (!$employee) {
            echo "Employee not found";
            return;
        }

        include '../View/edit_employee_view.php';
    }

    public function update($id)
    {
        $data = $_POST;

        if ($this->model->updateEmployee($id, $data)) {
            header("Location: ../View/employee_index.php");
        } else {
            echo "Error updating employee";
        }
    }

    // New method to get employee by ID
    public function getEmployeeById($id)
    {
        return $this->model->getEmployeeById($id);
    }
}
?>
