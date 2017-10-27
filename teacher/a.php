<?php
session_start();
  $con = mysqli_connect('localhost', 'root', '', 'AHMS');
/*  if ($con) {
    echo 'Success';
  }
 header('Location: '.'startbootstrap-sb-admin-2-gh-pages/index.html');
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
     header('location: /AHMS/student.html');
   }
   else if($rol==2)
   {
     header('location: /AHMS/warden.html');
   }
   if($rol==0)
   {
     header('location: /AHMS/admin.html');
   }
   else if($rol==3){
   header('location: /AHMS/teacher.html');
   }
   else {
     # code...
   }
 }
 else
 {
    header('Location: /AHMS/login.html');
 }}
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
