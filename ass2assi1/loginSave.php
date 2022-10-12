<?php

require_once('connection.php');
$email = $password = '';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM userdetails WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row['userID'];
		$email = $row['email'];
		$role = $row['role'];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}

	if($role == 'student'){
		header("Location: viewReqStudent.php");
	} else if($usertype == 'facilitator'){
		header("Location: viewReqFac.php");
	}
	else{
		header("Location: viewReqTeamLead.php");
	}

	
}
else
{
	echo "Invalid email or password";
}
?>