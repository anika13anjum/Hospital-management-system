<?php

class PendingAppointmentModel
{
    private $db;

    public function __construct()
    {
        require_once 'db.php';
        $this->db = new Database();
    }

    public function getAllPendingAppointments()
    {
        $connection = $this->db->getConnection();
        $query = "SELECT * FROM pending_appointment";
        $result = $connection->query($query);

        $appointments = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $appointments[] = $row;
            }
        }

        return $appointments;
    }

    public function deletePendingAppointment($id)
    {
        $connection = $this->db->getConnection();
        $query = "DELETE FROM pending_appointment WHERE id = $id";
        return $connection->query($query);
    }

    public function confirmAppointment($id)
    {
        $connection = $this->db->getConnection();

        // Get appointment details from pending_appointment
        $querySelect = "SELECT * FROM pending_appointment WHERE id = $id";
        $result = $connection->query($querySelect);

        if ($result->num_rows > 0) {
            $appointmentData = $result->fetch_assoc();

            // Insert into appointment table
            $queryInsert = "INSERT INTO appoinment (id, patient_id, doctor_id, appointment_date, time_slot, amount, amount_status, patient_current_status) 
                            VALUES ('{$appointmentData['id']}','{$appointmentData['patient_id']}', '{$appointmentData['doctor_id']}', '{$appointmentData['appointment_date']}', '{$appointmentData['time_slot']}', '{$appointmentData['amount']}', '{$appointmentData['amount_status']}', '{$appointmentData['patient_current_status']}')";

            // Delete from pending_appointment
            $queryDelete = "DELETE FROM pending_appointment WHERE id = $id";

            // Use a transaction to ensure atomicity
            $connection->begin_transaction();

            try {
                $connection->query($queryInsert);
                $connection->query($queryDelete);
                $connection->commit();
                return true;
            } catch (Exception $e) {
                $connection->rollback();
                return false;
            }
        }

        return false;
    }
}
?>
