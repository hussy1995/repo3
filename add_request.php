<?php
ob_start();
?>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<?php
include './connect.php';
$rdate=$_REQUEST['rdate'];
$mid=$_REQUEST['member'];
$sid=$_REQUEST['service'];
$query="insert into request(rdate,mid,sid) values('$rdate','$mid','$sid')";

if (mysqli_query($link, $query)){
    header("location:view_request.php");
}
else
{
    echo "Error : " . mysqli_error($link);
}
ob_flush();
?>
