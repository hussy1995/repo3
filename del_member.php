<?php

include './connect.php';
$mid=$_REQUEST['mid'];
$query="delete from member where mid=$mid";
if (mysqli_query($link, $query)){
    header("location:view_member.php");
}
else
{
    echo "Error : " . mysqli_error($link);
}

?>
