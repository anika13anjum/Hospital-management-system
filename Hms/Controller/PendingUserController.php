<?php

class PendingUserController
{
    private $model;

    public function __construct()
    {
        require_once '../Model/PendingUserModel.php';
        $this->model = new PendingUserModel();
    }

    public function index()
    {
        $users = $this->model->getAllPendingUsers();
        include '../View/pending_user_view.php';
    }

    public function reject($id)
    {
        if ($this->model->deletePendingUser($id)) {
            header("Location: ../View/pending_user_index.php");
        } else {
            echo "Error rejecting user";
        }
    }

    public function approve($id)
    {
        if ($this->model->approveUser($id)) {
            header("Location: ../View/pending_user_index.php");
        } else {
            echo "Error approving user";
        }
    }
}
?>
