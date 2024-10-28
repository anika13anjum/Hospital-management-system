<?php

require_once '../Model/PatientModel.php';

class PatientController
{
    private $model;

    public function __construct()
    {
        $this->model = new PatientModel();
    }

    public function index()
    {
        $patients = $this->model->getAllPatients();
        include '../View/patient_view.php';
    }
}
?>
