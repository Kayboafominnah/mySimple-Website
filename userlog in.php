<!DOCTYPE html>
<html>
<head>
	<title>Online Food Ordering System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="userlog in.css">
</head>

<form class="login-form">
  <h2>Login</h2>
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
  <button type="submit">Log In</button>
  <button type="button" id="signup-button">Sign Up</button>
</form>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_ordering_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM
