<?php

class DoctorModel
{
    private $db;

    public function __construct()
    {
        require_once 'db.php';
        $this->db = new Database();
    }

    public function getAllDoctors()
    {
        $connection = $this->db->getConnection();
        $query = "SELECT * FROM doctor";
        $result = $connection->query($query);

        $doctors = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $doctors[] = $row;
            }
        }

        return $doctors;
    }
}
?>
