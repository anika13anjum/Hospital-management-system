<!DOCTYPE html>
<html>

<head>
    <title>Patient List</title>
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
    <h2>Patient List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
        </tr>
        <?php foreach ($patients as $patient) : ?>
            <tr>
                <td><?= $patient['id'] ?></td>
                <td><?= $patient['name'] ?></td>
                <td><?= $patient['contact'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
