<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>
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
    <h2>Doctor List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Designation</th>
            <th>Join Date</th>
            <th>Department</th>
        </tr>
        <?php foreach ($doctors as $doctor) : ?>
            <tr>
                <td><?= $doctor['id'] ?></td>
                <td><?= $doctor['name'] ?></td>
                <td><?= $doctor['address'] ?></td>
                <td><?= $doctor['designation'] ?></td>
                <td><?= $doctor['join_date'] ?></td>
                <td><?= $doctor['department'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
