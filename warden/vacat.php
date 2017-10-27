<?php
$con = mysqli_connect('localhost', 'root', '', 'AHMS');

$rno=$_POST["arno"];

$query=mysqli_query($con,"delete from roomalloc where rollno='$rno'");
session_start();
$_SESSION['success']="Successfully Registered.. ! ";
header('location: /AHMS/warden.html');
?>
