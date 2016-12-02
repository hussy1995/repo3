<?php

include './connect.php';
$oid=$_REQUEST['oid'];
$query="delete from offer where oid=$oid";
if (mysqli_query($link, $query)){
    header("location:view_offer.php");
}
else
{
    echo "Error : " . mysqli_error($link);
}

?>
