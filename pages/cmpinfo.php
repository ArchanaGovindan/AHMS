<?php
$con = mysqli_connect('localhost', 'root', '', 'AHMS');
$name=$_POST["aname"];
$rno=$_POST["arno"];
$rmno=$_POST["armno"];

$cmp=$_POST["cmp"];
$crno=$_POST["hostel"];

if($crno==1)
{
  $course="Kailasam";
}
else if($crno==2)
{
  $course="Shivam";
}
else if($crno==3)
{
  $course="Ashokam";
}
else if($crno==4)
{
  $course="Pranavam";
}
else if($crno==5)
{
  $course="Prasadam";
}
else if($crno==6)
{
  $course="Sanathanam";
}
else {
  $course="NONE";
}
session_start();
$_SESSION['success']="Successfully Registered.. ! ";
$query=mysqli_query($con,"insert into complaint values ('$name','$rno','$rmno','$course','$cmp',0)");
header('location: /AHMS/student.html');
?>
