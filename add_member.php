<?php
ob_start();
?>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<?php
include './connect.php';
$mname=$_REQUEST['mname'];
$address=$_REQUEST['maddress'];
$email=$_REQUEST['memail'];
$query="insert into member(mname,maddress,memail) values('$mname','$address','$email')";

if (mysqli_query($link, $query)){
    header("location:view_member.php");
}
else
{
    echo "Error : " . mysqli_error($link);
}
ob_flush();
?>
