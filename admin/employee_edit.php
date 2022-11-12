
<!doctype html>
<html class="no-js" lang="">

<?php include('metatag.php'); ?>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php include('sidebar.php'); ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
 <?php include('header.php'); ?>
            <!-- Mobile Menu start -->
           <?php include('mobile_menu.php'); ?>
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
               
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>EMPLOYEE DETAILS</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         	   <div class="all-form-element-inner">
 <?php
 include('db.php');
 $employee_id=$_REQUEST['employee_id'];
 $sql="select * from employee_details details where employee_id='$employee_id'";
 $res=$conn->query($sql);
 $row=mysqli_fetch_array($res); 
 ?>
<form name="formID" id="formID" method="post" action="employee_update.php">
<input type="hidden" name="employee_id" value="<?php echo $row['employee_id'];?>">
  <table width="330" height="264" border="0" align="center">
    <tr>
      <td width="163">Name </td>
      <td width="157"><input name="employee_name" type="text" id="employee_name" class=" form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['employee_name'];?>"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input name="employee_address" type="text" id="employee_address" class="form-control validate,[required,custom[onlyLetter]]"  value="<?php echo $row['employee_address'];?>"></td>
    </tr>
    <tr>
      <td>Contactno</td>
      <td><input name="employee_contactno" type="text" id="employee_contactno" class="form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['employee_contactno'];?>"></td>
    </tr>
    <tr>
      <td>Type</td>
      <td><input name="employee_type" type="text" id="employee_type" class=" form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['employee_type'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
	  <a href="employee_view.php" onClick="call()" class="btn btn-primary">Back</a>
</td>
    </tr>
  </table>
</form>
<script>
function call()
{

}
</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form End-->
<?php include('footer.php'); ?>
<?php include('val.php'); ?>
</body>

</html>