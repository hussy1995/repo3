<?php
include './header.php';
?>

<?php
include './connect.php';
$sid=$_REQUEST['sid'];
$query="select * from service where sid=$sid";
$result=  mysqli_query($link, $query);
foreach ($result as $value){
    
    $sname=$value['sname'];
    $charges=$value['charges'];
}
?>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<br/><br/>
<h2 class="label label-default" style="font-size: 1.2em;">Edit Service</h2><br/><br/>
<br/><br/>
<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='Edit_Service_errorloc' class='error_strings' style=''></div>
<style type='text/css'>
.sfm_float_error_box
{
    font-family:Verdana;
    font-size:12px;
    color:#eeeeee;
    background:none repeat scroll 0 0 #333333;
    border:0;
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow:0 0 4px #333;
    border:none;
}
.sfm_close_box
{
    font-family:Verdana;
    font-size:12px;
    color:#eeeeee;
}
</style>
<form name="Edit_Service" action="edit_service.php?sid=<?php echo $sid?>" method="post">
    <table class="table table-hover table-striped">
        <tr>
            <th>Current Service</th>
            <td><input type="text" name="sname" value="<?php echo $sname; ?>" class="form-control" style="width: auto;"/></td>
            
        </tr>
        
        <tr>
            <th>Charges</th>
            <td><input type="number" name="charges" value="<?php echo $charges; ?>" class="form-control" style="width: auto;"/><br></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Update" class="btn btn-warning floatright"/>
            </td>
        </tr>
    </table>
    
    
    
    
    
</form><script type='text/javascript'>
// <![CDATA[
var Edit_ServiceValidator = new Validator("Edit_Service");
Edit_ServiceValidator.addValidation("sname",{required:true,message:"Please fill in sname"} );
Edit_ServiceValidator.addValidation("sname",{alpha_s:true,message:"The input for sname should be a valid alphabetic value"} );

// ]]>
</script>


<?php

if (isset($_REQUEST['submit'])){
    $sid=$_REQUEST['sid'];
    $sname=$_REQUEST['sname'];
    $charges=$_REQUEST['charges'];
    
    $query="update service set sname='$sname',charges='$charges' where sid=$sid";
    
    if (mysqli_query($link, $query)){
        header("location:view_service.php");
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