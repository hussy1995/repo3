<?php
include './header.php';
?>

<html>
    <head>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <h2 class="label label-default" style="font-size: 1.2em;">New Request</h2><br/><br/>
        <script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='Insert_offer_errorloc' class='error_strings' style=''></div>
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
<form name="Insert_offer" action="add_offer.php" method="post">
        <table class="table table-striped table-hover">
            <tr>
                <th>Date</th><td><input type="date" name="odate" class="form-control" style="width: auto;" /></td> 
            </tr>
            <tr>
                <th>Response</th><td><input type="text" name="response" class="form-control" style="width: auto;" /></td> 
            </tr>
            <tr>
                <th>Allocation</th><td><input type="text" name="allocation" class="form-control" style="width: auto;" /></td> 
            </tr>
            <tr>
                <th>Charges</th><td><input type="text" name="servicecharges" class="form-control" style="width: auto;" /></td> 
            </tr>
            <?php
                include './connect.php';
                $query = "select * from serviceprovider";
                $result = mysqli_query($link, $query);
                ?>
            <tr><th>Service Provider</th><td><select name="serviceprovider" class="form-control" style="width: auto;">
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
            <tr><th>Request</th><td><select name="request" class="form-control" style="width: auto;">
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
                <td colspan="2"><input type="submit" value="Insert" class="btn btn-success floatright"/></td>
            </tr>
        </table>
        </form><script type='text/javascript'>
// <![CDATA[
var Insert_offerValidator = new Validator("Insert_offer");
Insert_offerValidator.addValidation("response",{required:true,message:"Please fill in response"} );
Insert_offerValidator.addValidation("response",{alpha_s:true,message:"The input for response should be a valid alphabetic value"} );
Insert_offerValidator.addValidation("allocation",{required:true,message:"Please fill in allocation"} );
Insert_offerValidator.addValidation("allocation",{alpha_s:true,message:"The input for allocation should be a valid alphabetic value"} );
Insert_offerValidator.addValidation("servicecharges",{required:true,message:"Please fill in servicecharges"} );
Insert_offerValidator.addValidation("servicecharges",{numeric:true,message:"The input for servicecharges should be a valid numeric value"} );

// ]]>
</script>

    </body>
</html>
<?php
include './footer.php';
?>