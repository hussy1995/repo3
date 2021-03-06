<?php
include './header.php';
?>
<html>
    <head>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <h2 class="label label-default" style="font-size: 1.2em;">Register New Service</h2><br/><br/>
        <script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='Insert_Service_errorloc' class='error_strings' style=''></div>
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
<form name="Insert_Service" action="add_service.php" method="post">
        <table class="table table-striped table-hover">
            <tr>
                <th>Service Name</th><td><input type="text" name="sname" class="form-control" style="width: auto;" /></td> 
            </tr>
            <tr>
                <th>Charges</th><td><input type="text" name="charges" class="form-control" style="width: auto;" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Insert" class="btn btn-success floatright"/></td>
            </tr>
        </table>
        </form><script type='text/javascript'>
// <![CDATA[
var Insert_ServiceValidator = new Validator("Insert_Service");
Insert_ServiceValidator.addValidation("sname",{required:true,message:"Please fill in sname"} );
Insert_ServiceValidator.addValidation("sname",{alpha_s:true,message:"The input for sname should be a valid alphabetic value"} );
Insert_ServiceValidator.addValidation("charges",{required:true,message:"Please fill in charges"} );
Insert_ServiceValidator.addValidation("charges",{numeric:true,message:"The input for charges should be a valid numeric value"} );

// ]]>
</script>

    </body>
</html>
<?php
include './footer.php';
?>