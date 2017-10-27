<?php
$con = mysqli_connect('localhost', 'root', '', 'AHMS');
$name=$_POST["aname"];
$rno=$_POST["arno"];
$rmno=$_POST["rmno"];



$query=mysqli_query($con,"insert into roomalloc values ('$name','$rmno','$rno')");
session_start();
$_SESSION['success']="Successfully Registered.. ! ";
header('location: /AHMS/warden.html');
?>
