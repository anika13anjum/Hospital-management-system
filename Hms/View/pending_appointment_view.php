<!DOCTYPE html>
<html>

<head>
    <title>Pending Appointments</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        

        td {
            background-color: #6c757d;
            color: #fff;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5; /* Change the color on hover, you can customize it */
        }
    </style>
</head>

<body>
<?php include 'navbar.php'; ?>
    <h2>Pending Appointments</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Patient ID</th>
            <th>Doctor ID</th>
            <th>Appointment Date</th>
            <th>Time Slot</th>
            <th>Amount</th>
            <th>Amount Status</th>
            <th>Patient Status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($appointments as $appointment) : ?>
            <tr>
                <td><?= $appointment['id'] ?></td>
                <td><?= $appointment['patient_id'] ?></td>
                <td><?= $appointment['doctor_id'] ?></td>
                <td><?= $appointment['appointment_date'] ?></td>
                <td><?= $appointment['time_slot'] ?></td>
                <td><?= $appointment['amount'] ?></td>
                <td><?= $appointment['amount_status'] ?></td>
                <td><?= $appointment['patient_current_status'] ?></td>
                <td>
                    <a href="confirm_appointment.php?id=<?= $appointment['id'] ?>">Confirm</a>
                    <a href="delete_appointment.php?id=<?= $appointment['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
