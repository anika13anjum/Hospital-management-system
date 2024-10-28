<?php

class PendingUserModel
{
    private $db;

    public function __construct()
    {
        require_once 'db.php';
        $this->db = new Database();
    }

    public function getAllPendingUsers()
    {
        $connection = $this->db->getConnection();
        $query = "SELECT * FROM pending_user";
        $result = $connection->query($query);

        $users = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }

        return $users;
    }

    public function deletePendingUser($id)
    {
        $connection = $this->db->getConnection();
        $query = "DELETE FROM pending_user WHERE id = $id";
        return $connection->query($query);
    }

    public function approveUser($id)
    {
        $connection = $this->db->getConnection();

        // Get user details from pending_user
        $querySelect = "SELECT * FROM pending_user WHERE id = $id";
        $result = $connection->query($querySelect);

        if ($result->num_rows > 0) {
            $userData = $result->fetch_assoc();

            // Insert into user table
            $queryInsert = "INSERT INTO user (id, email, password, role) 
                            VALUES ('{$userData['id']}', '{$userData['email']}', '{$userData['password']}', '{$userData['role']}')";

            // Delete from pending_user
            $queryDelete = "DELETE FROM pending_user WHERE id = $id";

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
