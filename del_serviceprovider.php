<?php

include './connect.php';
$spid=$_REQUEST['spid'];
$query="delete from serviceprovider where spid=$spid";
if (mysqli_query($link, $query)){
    header("location:view_serviceprovider.php");
}
else
{
    echo "Error : " . mysqli_error($link);
}

?>
