<?php
session_start();
$uname = $_REQUEST['uname'];
$upass = $_REQUEST['upass'];
$role = $_REQUEST['role'];
include './connect.php';
$query = "select * from login where lname='$uname' and password='$upass' and role='$role'";
$result = mysqli_query($link, $query);
$no=  mysqli_affected_rows($link);
if($no>0)
{
   $row = mysqli_fetch_array($result);
  $_SESSION['uname'] = $row['lname'];
       
        header("location:index.php");  
}
else
    {
        
        
        header("location:login.php");
    }


?>