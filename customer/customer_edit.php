
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
                                    <h1>CUSTOMER DETAILS</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         	   <div class="all-form-element-inner">
			<?php
include('db.php');
$uname=$_SESSION['uname'];
$sql="select * from customer_details where customer_email='$uname'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
?> 
<form name="formID"id="formID" method="post" action="customer_update.php">
<input type="hidden"  name="customer_id"  value="<?php echo $row['customer_id'];?>">
  <table width="439" height="404" border="0">
    <tr>
      <td colspan="2"></td>
	 
    </tr>
    <tr>
      <td width="166">Name</td>
      <td width="160"><input name="customer_name" type="text" id="customer_name" class="form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['customer_name'];?>"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input name="customer_add" type="text" id="customer_add" class="form-control validate,[required]" value="<?php echo $row['customer_add'];?>"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="customer_city" type="text" id="customer_city" class="form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['customer_city'];?>"></td>
    </tr>
    <tr>
      <td>Contact no</td>
      <td><input name="customer_contact_no" type="text" id="customer_contact_no" class="form-control validate,[required,custom[onlyNumber]]"maxlength="10" pattern="[6-9]{1}[0-9]{9}" value="<?php echo $row['customer_contact_no'];?>"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="customer_email" type="text" id="customer_email" class="form-control validate,[required,custom[email]]" readonly="" value="<?php echo $row['customer_email'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Save Changes" class="btn btn-success btn">
	   <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
     </td>
    </tr>
  </table>
 
</form>
<a href="car_details_view.php" onClick="call()" class="btn btn-primary">Back</a>
<script>
function call()
{

}
</script>

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