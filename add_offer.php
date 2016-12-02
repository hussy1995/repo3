<?php
ob_start();
?>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<?php
include './connect.php';
$odate=$_REQUEST['odate'];
$response=$_REQUEST['response'];
$allocation=$_REQUEST['allocation'];
$servicecharges=$_REQUEST['servicecharges'];
$spid=$_REQUEST['serviceprovider'];
$rid=$_REQUEST['request'];
$query="insert into offer(odate,response,allocation,servicecharges,spid,rid) values('$odate','$response','$allocation','$servicecharges','$spid','$rid')";

if (mysqli_query($link, $query)){
    header("location:view_offer.php");
}
else
{
    echo "Error : " . mysqli_error($link);
}
ob_flush();
?>
