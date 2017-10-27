<?php
$con = mysqli_connect('localhost', 'root', '', 'AHMS');
$name=$_POST["aname"];
$rno=$_POST["arno"];
$gender=$_POST["Gender"];
$cno=$_POST["apno"];
$pname=$_POST["apname"];
$pno=$_POST["aprno"];
$crno=$_POST["course"];

if($crno==1)
{
  $course="Btech";
}
else if($crno==2)
{
  $course="BBA";
}
else if($crno==3)
{
  $course="BCA";
}
else if($crno==4)
{
  $course="BCOM";
}
else if($crno==5)
{
  $course="Int MA";
}
else if($crno==6)
{
  $course="PG";
}
else {
  $course="NONE";
}

$query=mysqli_query($con,"insert into student values ('$name','$rno','$gender','$cno','$pname','$pno','$course')");
session_start();
$_SESSION['success']="Successfully Registered.. ! ";
header('location: /AHMS/student.html');
