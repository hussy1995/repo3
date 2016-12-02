<?php
include './header.php';
?>


<html>
    <head>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <h2 class="label label-default" style="font-size: 1.2em;">New Service Provider</h2><br/><br/>
        <script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='Insert_ServiceProvider_errorloc' class='error_strings' style=''></div>
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
<form name="Insert_ServiceProvider" action="add_serviceprovider.php" method="post">
        <table class="table table-striped table-hover">
            <tr>
                <th>Provider Name</th><td><input type="text" name="spname" class="form-control" style="width: auto;" /></td> 
            </tr>
            <tr>
                <th>Address</th><td><input type="text" name="spaddress" class="form-control" style="width: auto;" /></td> 
            </tr>
            <tr>
                <th>Phone</th><td><input type="text" name="spphone" class="form-control" style="width: auto;" /></td> 
            </tr>
            <tr>
                <th>CNIC</th><td><input type="text" name="spcnic" class="form-control" style="width: auto;" /></td> 
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
                <td colspan="2"><input type="submit" value="Insert" class="btn btn-success floatright"/></td>
            </tr>
        </table>
        </form><script type='text/javascript'>
// <![CDATA[
var Insert_ServiceProviderValidator = new Validator("Insert_ServiceProvider");
Insert_ServiceProviderValidator.addValidation("spname",{required:true,message:"Please fill in spname"} );
Insert_ServiceProviderValidator.addValidation("spname",{alpha_s:true,message:"The input for spname should be a valid alphabetic value"} );
Insert_ServiceProviderValidator.addValidation("spaddress",{required:true,message:"Please fill in spaddress"} );
Insert_ServiceProviderValidator.addValidation("spaddress",{alnum_s:true,message:"The input for spaddress should be a valid alpha-numeric value"} );
Insert_ServiceProviderValidator.addValidation("spphone",{required:true,message:"Please fill in spphone"} );
Insert_ServiceProviderValidator.addValidation("spphone",{regexp:"(?:[\\(][0-9]{3}[\\)]|[0-9]{3})[-. ]?[0-9]{3}[-. ]?[0-9]{4}$",message:"Please enter a valid input for spphone"} );
Insert_ServiceProviderValidator.addValidation("spcnic",{required:true,message:"Please fill in spcnic"} );
Insert_ServiceProviderValidator.addValidation("spcnic",{regexp:"(?:[\\(][0-9]{5}[\\)]|[0-9]{5})[-. ]?[0-9]{7}[-. ]?[0-9]{1}$",message:"Please enter a valid input for spcnic"} );

// ]]>
</script>

    </body>
</html>
<?php
include './footer.php';
?>