<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
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

        form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <h2>Edit Employee</h2>
    <form action="update_employee.php?id=<?= $employee['id'] ?>" method="post">
        <label>Name:</label>
        <input type="text" name="name" value="<?= isset($employee['name']) ? $employee['name'] : '' ?>" readonly><br>
        <label>Address:</label>
        <input type="text" name="address" value="<?= isset($employee['address']) ? $employee['address'] : '' ?>" readonly><br>
        <label>Designation:</label>
        <input type="text" name="designation" value="<?= isset($employee['designation']) ? $employee['designation'] : '' ?>"><br>
        <label>Join Date:</label>
        <input type="text" name="join_date" value="<?= isset($employee['join_date']) ? $employee['join_date'] : '' ?>" readonly><br>
        <label>Department:</label>
        <input type="text" name="department" value="<?= isset($employee['department']) ? $employee['department'] : '' ?>" readonly><br>
        <label>Salary:</label>
        <input type="text" name="salary" value="<?= isset($employee['salary']) ? $employee['salary'] : '' ?>" readonly><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>
