<?php
$con = mysqli_connect('localhost', 'root', '', 'AHMS');
$name=$_POST["aname"];
$rno=$_POST["arno"];
$batch=$_POST["abatch"];
$gf=$_POST["agf"];
$campus=$_POST["campus"];
$time=$_POST["time"];
$dest=$_POST["adest"];
$rmno=$_POST["armno"];


$query=mysqli_query($con,"insert into leaves values ('$name','$rno','$batch','$gf','$campus','$time','$dest','$rmno',1)");
session_start();
$_SESSION['success']="Successfully Registered.. ! ";
header('location: /AHMS/student.html');
