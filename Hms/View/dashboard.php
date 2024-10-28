<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

		h1 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }

        nav {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        li {
            margin-right: 20px;
        }

        a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s;
        }

        a:hover {
            color: #f3722c; /* Change the color on hover to gold, you can customize it */
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
	<h1>Welcome to the Admin dashboard!</h1>
</body>
</html>
