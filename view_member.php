<?php
include './header.php';
?>


<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<link href="media/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<script src="media/jquery.dataTables.min.js" type="text/javascript"></script>


<a href="insert_member_form.php" class="btn btn-warning" style="float: right; margin-right: 100px; margin-top: 20px;">New Member</a>

<?php

include './connect.php';
$query="select * from member";

$result= mysqli_query($link, $query);
?>

<!--<div id="dr-data">-->
<table class="table " style="width: 100%;" id='dr_table'>
    <thead>
        <tr style="border-top: 1px solid #000; color: white; background: #666;">
            <th>Member ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($result as $value) {
    $mid=$value['mid'];
    $mname=$value['mname'];
    $maddress=$value['maddress'];
    $memail=$value['memail'];
    echo "<tr><td>$mid</td><td>$mname</td><td>$maddress</td><td>$memail</td><td><a href='del_member.php?mid=$mid' class='btn btn-danger btn-sm'>Delete</a> <a href='edit_member.php?mid=$mid' class='btn btn-warning btn-sm'>Edit</a></td></tr>";
}
?>
    </tbody>
</table>

<?php
include './footer.php';
?>