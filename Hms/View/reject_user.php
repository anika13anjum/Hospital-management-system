<?php

require_once '../Controller/PendingUserController.php';

$id = $_GET['id'];

$controller = new PendingUserController();
$controller->reject($id);

?>
