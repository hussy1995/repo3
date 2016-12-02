<?php
include './header.php';
?>
<html>
    <head>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <h2 class="label label-default" style="font-size: 1.2em; ">Register New Member</h2><br/><br/>
        <script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='Insert_Member_errorloc' class='error_strings' style=''></div>
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
<form name="Insert_Member" action="add_member.php" method="post">
        <table class="table">
            <tr>
                <th>Member Name</th><td><input type="text" name="mname" class="form-control" style="width: auto;" /></td> 
            </tr>
            <tr>
                <th>Address</th><td><input type="text" name="maddress" class="form-control" style="width: auto;" /></td>
            </tr>
            <tr>
                <th>Email</th><td><input type="text" name="memail" class="form-control" style="width: auto;" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Insert" class="btn btn-success floatright"/></td>
            </tr>
        </table>
        </form><script type='text/javascript'>
// <![CDATA[
var Insert_MemberValidator = new Validator("Insert_Member");
Insert_MemberValidator.addValidation("mname",{required:true,message:"Please fill in mname"} );
Insert_MemberValidator.addValidation("mname",{alpha_s:true,message:"The input for mname should be a valid alphabetic value"} );
Insert_MemberValidator.addValidation("maddress",{required:true,message:"Please fill in maddress"} );
Insert_MemberValidator.addValidation("maddress",{alnum_s:true,message:"The input for maddress should be a valid alpha-numeric value"} );
Insert_MemberValidator.addValidation("memail",{required:true,message:"Please fill in memail"} );
Insert_MemberValidator.addValidation("memail",{email:true,message:"The input for memail should be a valid email value"} );

// ]]>
</script>

    </body>
</html>
<?php
include './footer.php';
?>