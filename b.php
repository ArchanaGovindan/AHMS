<?php
session_start();
  $con = mysqli_connect('localhost', 'root', '', 'AHMS');
  $name=$_POST["uname"];
  $pass=$_POST["pass"];
  $rno=$_POST["roll"];
  $query=mysqli_query($con,"insert into auth values('".$name."','".$pass."',".$rno.")");
  header("location: index.html");
  ?>
