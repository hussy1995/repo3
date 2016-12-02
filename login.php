

<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Out Source Center</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


    </head>
    <body>
        
        <br><br>
    <center><h1 class="label label-success" style="font-family: sans-serif; text-align: center; font-size: 2.5em;">OutSource Center</h1></center>
        <br/><br/>
    <center>
        <h1 class="label label-default" style="font-size: 2em;">Login Here</h1>
        <br/><br/><br/>
        <form name="log" action="vlog.php" method="post">
            <table class="table" width="200">
                <tr border="0">
                    <td style="padding-left:530px;">
                        <input type="text" name="uname" placeholder="User Name" class="form-control" style="width: 300px;" required/>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left:530px;">
                        <input type="password" name="upass" placeholder="Password" class="form-control" style="width: 300px;" required/>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left:530px;">
                        <select name="role" class="form-control" style="width: 300px;">
                            
                            <option value="Admin">Administrator</option>
                            <option value="User">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php 
                        if (isset($_REQUEST['err'])){
                         echo "<b style='color:white; float:left;'>Invalid Login Values, Try Again</b>";
                        }
                        ?>
                        <input type="submit" name="submit" value="Login" class="btn btn-block" style="width: 150px; margin-left: 595px;"/>
                    </td>
                </tr>
            
            </table>
        </form>
    </center>
        
    </body>
</html>

 
<!--include './connect.php';
if (isset($_REQUEST['submit'])){
    $uname=$_REQUEST['uname'];
    $password=$_REQUEST['password'];
    $role=$_REQUEST['role'];
    $query="select * from login where lname='$uname' and password='$password' and role='$role'";
    $rslt=  mysqli_query($link, $query);
    $row=  mysqli_fetch_array($rslt);
    if ($row>0){
        foreach ($rslt as $value) {
            $_SESSION['uname']=$value['lname'];
            $_SESSION['role']=$value['role'];
        }
        header("location:home.php");
    }
 else {
        header("location:index.php");    
    }
}-->





