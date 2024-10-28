<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        form {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 20px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        label[for="check"] {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <form align="center" action="" method="post">
        <h2>Enter your information for Login</h2>
        <label for="id"><b>Email or Number:</b></label>
        <input type="text" placeholder="Enter email" name="email" id="email" required>
        <label for="password"><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
        <button type="submit" name="login">Login</button>
        <br>
    </form>
</body>
</html>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['email'] = $row["email"];
            header("location: dashboard.php");
            exit();
        }
    } else {
            echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
