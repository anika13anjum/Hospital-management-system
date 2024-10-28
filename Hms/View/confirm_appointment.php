<?php

require_once '../Controller/PendingAppointmentController.php';

$id = $_GET['id'];

$controller = new PendingAppointmentController();
$controller->confirm($id);

?>
