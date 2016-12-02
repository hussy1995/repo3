<?php
include './header.php';
?>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<link href=1Q"media/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<script src="media/jquery.dataTables.min.js" type="text/javascript"></script>


<a href="insert_serviceprovider_form.php" class="btn btn-warning" style="float: right; margin-right: 100px; margin-top: 20px;">New Service Provider</a>

<?php

include './connect.php';
$query="select * from serviceprovider,service where serviceprovider.sid=service.sid";

$result= mysqli_query($link, $query);
?>

<!--<div id="dr-data">-->
<table class="table table-striped table-hover" style="width: 100%;" id='dr_table'>
    <thead>
        <tr style="border-top: 1px solid #000; color: white; background: #666;">
            <th>Provider ID</th>
            <th>Provider Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>CNIC</th>
            <th>Service</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($result as $value) {
    $spid=$value['spid'];
    $spname=$value['spname'];
    $spaddress=$value['spaddress'];
    $spphone=$value['spphone'];
    $spcnic=$value['spcnic'];
    $sid=$value['sname'];
    echo "<tr><td>$spid</td><td>$spname</td><td>$spaddress</td><td>$spphone</td><td>$spcnic</td><td>$sid</td><td><a href='del_serviceprovider.php?spid=$spid' class='btn btn-danger btn-sm'>Delete</a> <a href='edit_serviceprovider.php?spid=$spid' class='btn btn-warning btn-sm'>Edit</a></td></tr>";
}
?>
    </tbody>
</table>
<?php
include './footer.php';
?>