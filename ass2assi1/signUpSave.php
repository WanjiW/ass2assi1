<?php
require_once('connection.php');
$email = $password = $role = '';

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "INSERT INTO userdetails (email, password, role) VALUES ('$email','$password','$role')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>