<?php

include './connect.php';
$sid=$_REQUEST['sid'];
$query="delete from service where sid=$sid";
if (mysqli_query($link, $query)){
    header("location:view_service.php");
}
else
{
    echo "Error : " . mysqli_error($link);
}

?>
