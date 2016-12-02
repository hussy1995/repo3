
<html>
    <head>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <h2 class="label label-default" style="font-size: 1.2em;">New Request</h2><br/><br/>
        <form name="Insert_Request" action="add_request.php" method="post">
        <table class="table table-striped table-hover">
            <tr>
                <th>Date</th><td><input type="date" name="rdate" class="form-control" style="width: auto;" /></td> 
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
                <td colspan="2"><input type="submit" value="Insert" class="btn btn-success floatright"/></td>
            </tr>
        </table>
        </form>
    </body>
</html>
<?php
include './footer.php';
?>