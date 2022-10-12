<?php
require_once('connection.php');
$studentemail = $concern = $recipient = '';

$studentemail = $_POST['studentemail'];
$concern = $_POST['concern'];
$recipient = $_POST['recipientemail'];

$sql = "INSERT INTO userrequests (studentEmail, concern, recipientEmail) VALUES ('$studentemail','$concern','$recipient')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: viewReqStudent.php");
}
else
{
	echo "Error :".$sql;
}
?>