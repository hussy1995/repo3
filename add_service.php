<?php
ob_start();
?>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<?php
include './connect.php';
$sname=$_REQUEST['sname'];
$charges=$_REQUEST['charges'];
$query="insert into service(sname,charges) values('$sname','$charges')";

if (mysqli_query($link, $query)){
    header("location:view_service.php");
}
else
{
    echo "Error : " . mysqli_error($link);
}
ob_flush();
?>
