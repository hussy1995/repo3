<?php
include './header.php';
?>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<link href="media/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<script src="media/jquery.dataTables.min.js" type="text/javascript"></script>


<a href="insert_offer_form.php" class="btn btn-warning" style="float: right; margin-right: 100px; margin-top: 20px;">New Offer</a>

<?php

include './connect.php';
$query="select * from offer,serviceprovider,request where offer.spid=serviceprovider.spid and offer.rid=request.rid";

$result= mysqli_query($link, $query);
?>

<!--<div id="dr-data">-->
<table class="table table-striped table-hover" style="width: 100%;" id='dr_table'>
    <thead>
        <tr style="border-top: 1px solid #000; color: white; background: #666;">
            <th>Offer ID</th>
            <th>Date</th>
            <th>Response</th>
            <th>Allocation</th>
            <th>Charges</th>
            <th>Service Provider</th>
            <th>Request Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($result as $value) {
    $oid=$value['oid'];
    $odate=$value['odate'];
    $response=$value['response'];
    $allocation=$value['allocation'];
    $servicecharges=$value['servicecharges'];
    $spid=$value['spname'];
    $rid=$value['rdate'];
    echo "<tr><td>$oid</td><td>$odate</td><td>$response</td><td>$allocation</td><td>$servicecharges</td><td>$spid</td><td>$rid</td><td><a href='del_offer.php?oid=$oid' class='btn btn-danger btn-sm'>Delete</a> <a href='edit_offer.php?oid=$oid' class='btn btn-warning btn-sm'>Edit</a></td></tr>";
}
?>
    </tbody>
</table>
<?php
include './footer.php';
?>