<?php
ob_start();
?>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<?php
include './connect.php';
$spname=$_REQUEST['spname'];
$spaddress=$_REQUEST['spaddress'];
$spphone=$_REQUEST['spphone'];
$spcnic=$_REQUEST['spcnic'];
$sid=$_REQUEST['service'];
$query="insert into serviceprovider(spname,spaddress,spphone,spcnic,sid) values('$spname','$spaddress','$spphone','$spcnic','$sid')";

if (mysqli_query($link, $query)){
    header("location:view_serviceprovider.php");
}
else
{
    echo "Error : " . mysqli_error($link);
}
ob_flush();
?>
