<?php
include './header.php';
?>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<link href="media/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<script src="media/jquery.dataTables.min.js" type="text/javascript"></script>


<a href="insert_service_form.php" class="btn btn-warning" style="float: right; margin-right: 100px; margin-top: 20px;">New Service</a>

<?php

include './connect.php';
$query="select * from service";

$result= mysqli_query($link, $query);
?>

<!--<div id="dr-data">-->
<table class="table table-striped table-hover" style="width: 100%;" id='dr_table'>
    <thead>
        <tr style="border-top: 1px solid #000; color: white; background: #666;">
            <th>Service ID</th>
            <th>Name</th>
            <th>Charges</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($result as $value) {
    $sid=$value['sid'];
    $sname=$value['sname'];
    $charges=$value['charges'];
    echo "<tr><td>$sid</td><td>$sname</td><td>$charges</td><td><a href='del_service.php?sid=$sid' class='btn btn-danger btn-sm'>Delete</a> <a href='edit_service.php?sid=$sid' class='btn btn-warning btn-sm'>Edit</a></td></tr>";
}
?>
    </tbody>
</table>
<?php
include './footer.php';
?>