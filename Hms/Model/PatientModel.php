<?php

class PatientModel
{
    private $db;

    public function __construct()
    {
        require_once 'db.php';
        $this->db = new Database();
    }

    public function getAllPatients()
    {
        $connection = $this->db->getConnection();
        $query = "SELECT * FROM patient";
        $result = $connection->query($query);

        $patients = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $patients[] = $row;
            }
        }

        return $patients;
    }
}
?>
