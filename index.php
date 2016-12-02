<?php
session_start();
if(isset($_SESSION['uname']))
{
    header("location:home.php");
}
 else {
    header("location:login.php");    
}
?>