<?php
include './header.php';
?>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<link href="media/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<script src="media/jquery.dataTables.min.js" type="text/javascript"></script>

<a href="insert_request_form.php" class="btn btn-warning" style="float: right; margin-right: 100px; margin-top: 20px;">New Request</a>

<?php

include './connect.php';
$query="select * from request,member,service where request.mid=member.mid and request.sid=service.sid";

$result= mysqli_query($link, $query);
?>

<!--<div id="dr-data">-->
<table class="table table-striped table-hover" style="width: 100%;" id='dr_table'>
    <thead>
        <tr style="border-top: 1px solid #000; color: white; background: #666;">
            <th>Request ID</th>
            <th>Date</th>
            <th>Member</th>
            <th>Service</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach ($result as $value) {
    $rid=$value['rid'];
    $rdate=$value['rdate'];
    $mid=$value['mname'];
    $sid=$value['sname'];
    echo "<tr><td>$rid</td><td>$rdate</td><td>$mid</td><td>$sid</td><td><a href='del_request.php?rid=$rid' class='btn btn-danger btn-sm'>Delete</a> <a href='edit_request.php?rid=$rid' class='btn btn-warning btn-sm'>Edit</a></td></tr>";
}
?>
    </tbody>
</table>
<?php
include './footer.php';
?>