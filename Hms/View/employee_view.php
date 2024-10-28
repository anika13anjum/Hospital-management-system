<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
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

        th {
            background-color: #333;
            color: #fff;
        }

        td {
            background-color: #6c757d;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5; /* Change the color on hover, you can customize it */
        }

        a {
            text-decoration: none;
            color: #007bff; /* You can customize the link color */
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <h2>Employee List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Designation</th>
            <th>Join Date</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>
        <?php foreach ($employees as $employee) : ?>
            <tr>
                <td><?= $employee['id'] ?></td>
                <td><?= $employee['name'] ?></td>
                <td><?= $employee['address'] ?></td>
                <td><?= $employee['designation'] ?></td>
                <td><?= $employee['join_date'] ?></td>
                <td><?= $employee['department'] ?></td>
                <td><?= $employee['salary'] ?></td>
                <td><a href="edit_employee.php?id=<?= $employee['id'] ?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
