<?php

require_once '../Controller/EmployeeController.php';

$id = $_GET['id'];

$controller = new EmployeeController();
$controller->update($id);

?>
