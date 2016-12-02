<?php
include './header.php';
?>

<?php
include './connect.php';
$rid=$_REQUEST['rid'];
$query="select * from request where rid=$rid";
$result=  mysqli_query($link, $query);
foreach ($result as $value){
    
    $rdate=$value['rdate'];
}
?>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<br/><br/>
<h2 class="label label-default" style="font-size: 1.2em;">Edit Request</h2><br/><br/>
<br/><br/>
<form name="Edit_Request" action="edit_request.php?rid=<?php echo $rid?>" method="post">
    <table class="table table-hover table-striped">
        <tr>
            <th>Current Date</th>
            <td><input type="date" name="rdate" value="<?php echo $rdate; ?>" class="form-control" style="width: auto;"/></td>
            
        </tr>
        <?php
                include './connect.php';
                $query = "select * from member";
                $result = mysqli_query($link, $query);
                ?>
            <tr><th>Member</th><td><select name="member" class="form-control" style="width: auto;">
                            <?php
                            foreach ($result as $value) {
                                $mid = $value['mid'];
                                $mname = $value['mname'];
                                ?>
                                <option value="<?php echo $mid; ?>"><?php echo $mname; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td></tr>
            <?php
                include './connect.php';
                $query = "select * from service";
                $result = mysqli_query($link, $query);
                ?>
            <tr><th>Service</th><td><select name="service" class="form-control" style="width: auto;">
                            <?php
                            foreach ($result as $value) {
                                $sid = $value['sid'];
                                $sname = $value['sname'];
                                ?>
                                <option value="<?php echo $sid; ?>"><?php echo $sname; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td></tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Update" class="btn btn-warning floatright"/>
            </td>
        </tr>
    </table>
    
    
    
    
    
</form>

<?php

if (isset($_REQUEST['submit'])){
    $rid=$_REQUEST['rid'];
    $rdate=$_REQUEST['rdate'];
    $sid=$_REQUEST['service'];
    $mid=$_REQUEST['member'];
    
    $query="update request set rdate='$rdate',sid='$sid',mid=$mid where rid=$rid";
    
    if (mysqli_query($link, $query)){
        header("location:view_request.php");
    }
    else
    {
        echo "Error : " . mysqli_error($link);
    }
    
}

?>
<?php
include './footer.php';
?>