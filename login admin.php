<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="admin-login.css">
    
    <style>
   body {
  background-image: url("d1.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}


form {
  background-color: #fff;
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  box-shadow: 0px 2px 4px rgba(0,0,0,0.4);
  border-radius: 5px;
}

h1 {
  text-align: center;
  font-size: 28px;
  margin-bottom: 20px;
  font-weight: bold;
}

label {
  display: block;
  font-size: 16px;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="password"] {
  display: block;
  width: 100%;
 
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 5px;
  box-shadow: inset 0px 2px 4px rgba(0,0,0,0.2);
}

button[type="submit"] {
  color: #fff;
  border: none;
  font-size: 16px;
  cursor: pointer;
  font-weight: bold;
  
}

button[type="submit"]:hover {
  background-color: #3e8e41;
  font-weight: bold;
  
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font-weight: bold;
}

    
    </style>
</head>
<body>
	<header>
		<h1>Admin Login</h1>
	</header>
	<main>
		<form action="dashboard.php" method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required><br><br>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required><br><br>
<div class = "button"> 
    <input type="submit" value="Login">
</div>
			
		</form>
	</main>
</body>
</html>




<?php
// create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_order";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    
    if (!empty($username) && !empty($password)) {


        $sql = "SELECT * FROM admin_login WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
        
            session_start();
            $_SESSION['username'] = $username;

            header("Location: dashboard.php");
            exit();
        } else {
            $error_message = "Invalid username or password.";
        }
    } else {
        $error_message = "Please enter both username and password.";
    }
}

// close the database connectio
mysqli_close($conn);
?>


