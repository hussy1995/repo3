<?php

include './connect.php';
$spid=$_REQUEST['spid'];

$pid = $_REQUEST['pid'];
$query="delete from serviceprovider where spid=$spid";
if (mysqli_query($link, $query)){
    header("locaation:view_serviceprovider.php");
    header(location:home.php);
}
else
{
}

?>
