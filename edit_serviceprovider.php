<?php
include './header.php';
?>

<?php
include './connect.php';
$spid=$_REQUEST['spid'];
$query="select * from serviceprovider where spid=$spid";
$result=  mysqli_query($link, $query);
foreach ($result as $value){
    
    $spname=$value['spname'];
    $spaddress=$value['spaddress'];
    $spphone=$value['spphone'];
    $spcnic=$value['spcnic'];
}
?>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<br/><br/>
<h2 class="label label-default" style="font-size: 1.2em;">Edit Service Provider</h2><br/><br/>
<br/><br/>
<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='Edit_ServiceProvider_errorloc' class='error_strings' style=''></div>
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
<form name="Edit_ServiceProvider" action="edit_serviceprovider.php?spid=<?php echo $spid?>" method="post">
    <table class="table table-hover table-striped">
        <tr>
            <th>Current Provider</th>
            <td><input type="text" name="spname" value="<?php echo $spname; ?>" class="form-control" style="width: auto;"/></td>    
        </tr>
        <tr>
            <th>Current Address</th>
            <td><input type="text" name="spaddress" value="<?php echo $spaddress; ?>" class="form-control" style="width: auto;"/></td>    
        </tr>
        <tr>
            <th>Current Phone</th>
            <td><input type="text" name="spphone" value="<?php echo $spphone; ?>" class="form-control" style="width: auto;"/></td>    
        </tr>
        <tr>
            <th>Current CNIC</th>
            <td><input type="text" name="spcnic" value="<?php echo $spcnic; ?>" class="form-control" style="width: auto;"/></td>    
        </tr>
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
    
    
    
    
    
</form>0<script type='text/javascript'>
// <![CDATA[
var Edit_ServiceProviderValidator = new Validator("Edit_ServiceProvider");
Edit_ServiceProviderValidator.addValidation("spname",{required:true,message:"Please fill in spname"} );
Edit_ServiceProviderValidator.addValidation("spname",{alpha_s:true,message:"The input for spname should be a valid alphabetic value"} );
Edit_ServiceProviderValidator.addValidation("spaddress",{required:true,message:"Please fill in spaddress"} );
Edit_ServiceProviderValidator.addValidation("spaddress",{alnum_s:true,message:"The input for spaddress should be a valid alpha-numeric value"} );
Edit_ServiceProviderValidator.addValidation("spphone",{required:true,message:"Please fill in spphone"} );
Edit_ServiceProviderValidator.addValidation("spphone",{regexp:"(?:[\\(][0-9]{3}[\\)]|[0-9]{3})[-. ]?[0-9]{3}[-. ]?[0-9]{4}$",message:"Please enter a valid input for spphone"} );
Edit_ServiceProviderValidator.addValidation("spcnic",{required:true,message:"Please fill in spcnic"} );
Edit_ServiceProviderValidator.addValidation("spcnic",{regexp:"(?:[\\(][0-9]{5}[\\)]|[0-9]{5})[-. ]?[0-9]{7}[-. ]?[0-9]{1}$",message:"Please enter a valid input for spcnic"} );

// ]]>
</script>


<?php

if (isset($_REQUEST['submit'])){
    $spid=$_REQUEST['spid'];
    $spname=$_REQUEST['spname'];
    $spaddress=$_REQUEST['spaddress'];
    $spphone=$_REQUEST['spphone'];
    $spcnic=$_REQUEST['spcnic'];
    $sid=$_REQUEST['service'];
    
    $query="update serviceprovider set spname='$spname',spaddress='$spaddress',spphone='$spphone',spcnic='$spcnic',sid='$sid' where spid=$spid";
    
    if (mysqli_query($link, $query)){
        header("location:view_serviceprovider.php");
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