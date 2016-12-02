<?php
include './header.php';
?>

<?php
include './connect.php';
$oid=$_REQUEST['oid'];
$query="select * from offer where oid=$oid";
$result=  mysqli_query($link, $query);
foreach ($result as $value){
    
    $odate=$value['odate'];
    $response=$value['response'];
    $allocation=$value['allocation'];
    $servicecharges=$value['servicecharges'];
}
?>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<br/><br/>
<h2 class="label label-default" style="font-size: 1.2em;">Edit Offer</h2><br/><br/>
<br/><br/>
<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='Edit_Offer_errorloc' class='error_strings' style=''></div>
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
<form name="Edit_Offer" action="edit_offer.php?oid=<?php echo $oid?>" method="post">
    <table class="table table-hover table-striped">
        <tr>
            <th>Current Date</th>
            <td><input type="date" name="odate" value="<?php echo $odate; ?>" class="form-control" style="width: auto;"/></td>
        </tr>
        <tr>
            <th>Current Response</th>
            <td><input type="text" name="response" value="<?php echo $response; ?>" class="form-control" style="width: auto;"/></td>
        </tr>
        <tr>
            <th>Allocation</th>
            <td><input type="text" name="allocation" value="<?php echo $allocation; ?>" class="form-control" style="width: auto;"/></td>
        </tr>
        <tr>
            <th>Current Charges</th>
            <td><input type="text" name="servicecharges" value="<?php echo $servicecharges; ?>" class="form-control" style="width: auto;"/></td>
        </tr>
        <?php
                include './connect.php';
                $query = "select * from serviceprovider";
                $result = mysqli_query($link, $query);
                ?>
            <tr><th>Service Provider</th><td><select name="provider" class="form-control" style="width: auto;">
                            <?php
                            foreach ($result as $value) {
                                $spid = $value['spid'];
                                $spname = $value['spname'];
                                ?>
                                <option value="<?php echo $spid; ?>"><?php echo $spname; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td></tr>
            <?php
                include './connect.php';
                $query = "select * from request";
                $result = mysqli_query($link, $query);
                ?>
            <tr><th>Request Date</th><td><select name="request" class="form-control" style="width: auto;">
                            <?php
                            foreach ($result as $value) {
                                $rid = $value['rid'];
                                $rdate = $value['rdate'];
                                ?>
                                <option value="<?php echo $rid; ?>"><?php echo $rdate; ?></option>
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
    
    
    
    
    
</form><script type='text/javascript'>
// <![CDATA[
var Edit_OfferValidator = new Validator("Edit_Offer");
Edit_OfferValidator.addValidation("response",{required:true,message:"Please fill in response"} );
Edit_OfferValidator.addValidation("response",{alpha_s:true,message:"The input for response should be a valid alphabetic value"} );
Edit_OfferValidator.addValidation("allocation",{required:true,message:"Please fill in allocation"} );
Edit_OfferValidator.addValidation("allocation",{alpha_s:true,message:"The input for allocation should be a valid alphabetic value"} );
Edit_OfferValidator.addValidation("servicecharges",{required:true,message:"Please fill in servicecharges"} );
Edit_OfferValidator.addValidation("servicecharges",{numeric:true,message:"The input for servicecharges should be a valid numeric value"} );

// ]]>
</script>


<?php

if (isset($_REQUEST['submit'])){
    $oid=$_REQUEST['oid'];
    $odate=$_REQUEST['odate'];
    $response=$_REQUEST['response'];
    $allocation=$_REQUEST['allocation'];
    $servicecharges=$_REQUEST['servicecharges'];
    $spid=$_REQUEST['provider'];
    $rid=$_REQUEST['request'];
    
    $query="update offer set odate='$odate',response='$response',allocation='$allocation',servicecharges='$servicecharges',spid='$spid',rid=$rid where oid=$oid";
    
    if (mysqli_query($link, $query)){
        header("location:view_offer.php");
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