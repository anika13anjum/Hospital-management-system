<?php

class EmployeeModel
{
    private $db;

    public function __construct()
    {
        require_once 'db.php';
        $this->db = new Database();
    }

    public function getAllEmployees()
    {
        $connection = $this->db->getConnection();
        $query = "SELECT * FROM employee";
        $result = $connection->query($query);

        $employees = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $employees[] = $row;
            }
        }

        return $employees;
    }

    public function getEmployeeById($id)
    {
        $connection = $this->db->getConnection();
        $query = "SELECT * FROM employee WHERE id = $id";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }

        return null;
    }

    public function updateEmployee($id, $data)
    {
        $connection = $this->db->getConnection();
        $name = $data['name'];
        $address = $data['address'];
        $designation = $data['designation'];
        $joinDate = $data['join_date'];
        $department = $data['department'];
        $salary = $data['salary'];

        $query = "UPDATE employee SET name='$name', address='$address', designation='$designation', join_date='$joinDate', department='$department', salary='$salary' WHERE id=$id";

        return $connection->query($query);
    }
}
?>
