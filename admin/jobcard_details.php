
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
                                    <h1>JOBCARD DETAILS FORM</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         	   <div class="all-form-element-inner">

<form name="formID" id="formID" method="post" action="jobcard_details_form.php">
  <table width="425" height="136" border="0">
   
    <tr>
      <td width="157">Customer / Vehicle </td>
      <td width="147"><select name="car_id" id="car_id" class=" form-control validate[required]">
	   <option value="">Select Vehicle</option>
	   <?php
  include('db.php');
  $sql1="select * from car_details c,customer_details cd where c.customer_id=cd.customer_id";
  $res1=$conn->query($sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
	  <option value="<?php echo $row1['car_id'];?>"><?php echo $row1['customer_name'];?> / <?php echo $row1['car_make'];?> / <?php echo $row1['car_model'];?></option>
	<?php
	}
	?>
	  
      </select></td>
    </tr>
  
   
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"  class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset"  class="btn btn-danger btn">
	   <a href="jobcard_details_view.php" onClick="call()" class="btn btn-primary">Back</a>
<script>
function call()
{

}
</script></td>
    </tr>
  </table>
</form>
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