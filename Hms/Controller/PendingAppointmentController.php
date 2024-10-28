<?php

class PendingAppointmentController
{
    private $model;

    public function __construct()
    {
        require_once '../Model/PendingAppointmentModel.php';
        $this->model = new PendingAppointmentModel();
    }

    public function index()
    {
        $appointments = $this->model->getAllPendingAppointments();
        include '../View/pending_appointment_view.php';
    }

    public function delete($id)
    {
        if ($this->model->deletePendingAppointment($id)) {
            header("Location: ../View/pending_appointment_index.php");
        } else {
            echo "Error deleting appointment";
        }
    }

    public function confirm($id)
    {
        if ($this->model->confirmAppointment($id)) {
            header("Location: ../View/pending_appointment_index.php");
        } else {
            echo "Error confirming appointment";
        }
    }
}
?>
