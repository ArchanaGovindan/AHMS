<?php
session_start();
  $con = mysqli_connect('localhost', 'root', '', 'AHMS');
/*  if ($con) {
    echo 'Success';
  }
*/
$name=$_POST["name"];
$pass=$_POST["pass"];


if($name!=''&&$pass!='')
 {
   $query=mysqli_query($con,"select * from auth where uname='".$name."' and password='".$pass."'");
   if(mysqli_num_rows($query) == 1)
   {
     $row = mysqli_fetch_assoc($query);
     $rol=$row['role'];

   $_SESSION['name']=$name;
    if($rol==1)
    {
      header('location: student.html');
    }
    else if($rol==2)
    {
      header('location: warden.html');
    }
    if($rol==0)
    {
      header('location: admin.html');
    }
    else if($rol==3){
    header('location: teacher.html');
    }
    else {
      # code...
    }
  /*  header('location: dash/dashboard.html');*/
   }

 }
 else
 {
  header('Location: login.html');
 }
/*
$result = mysql_query("SELECT * FROM auth");
while($row=mysql_fetch_array($result))
{
$user=$row['uname'];
$pwd=$row['password'];
}*/
 ?>
<html>
<body>



</body>
</html>
