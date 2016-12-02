<?php

include './connect.php';
$rid=$_REQUEST['rid'];
$query="delete from request where rid=$rid";
if (mysqli_query($link, $query)){
    header("location:view_request.php");
}
else
{
    echo "Error : " . mysqli_error($link);
}

?>
