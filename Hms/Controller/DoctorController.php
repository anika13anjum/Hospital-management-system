<?php

require_once '../Model/DoctorModel.php';

class DoctorController
{
    private $model;

    public function __construct()
    {
        $this->model = new DoctorModel();
    }

    public function index()
    {
        $doctors = $this->model->getAllDoctors();
        include '../View/doctor_view.php';
    }
}
?>
