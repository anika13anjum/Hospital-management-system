<?php

require_once '../Controller/EmployeeController.php';

// Get the employee ID from the URL
$employeeId = $_GET['id'];

// Instantiate the controller
$controller = new EmployeeController();

// Get the employee data by ID
$employee = $controller->getEmployeeById($employeeId);

// Check if the employee exists
if (!$employee) {
    echo "Employee not found";
    // You might want to redirect to the employee list or show an error page
    exit;
}

// Include the edit employee view
include 'edit_employee_view.php';
?>
