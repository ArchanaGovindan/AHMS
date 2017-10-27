<?php   $con = mysqli_connect('localhost', 'root', '', 'AHMS');
  $s=$_POST['status'];
  $r=$_POST['h'];
   $query=mysqli_query($con,"update complaint set status=$s where rno='$r'");
   header('location: maint.php');
    ?>
