
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
		<?php $car_id=$_POST['car_id'];?>

<form name="formID" id="formID" method="post" action="jobcard_details_insert.php">
  <table width="425" height="830" border="0">
   
    <tr>
      <td width="157">Customer / Car </td>
      <td width="147"><select name="car_id" id="car_id" class=" form-control validate[required]">
	  
	   <?php
  include('db.php');
  
    echo $sql5="select * from book_service bs,booking_details bd where bs.booking_id=bd.booking_id  and bd.car_id='$car_id'  and bd.status='Confirmed'";
	  $res5=$conn->query($sql5);
	 $row5=mysqli_fetch_array($res5);
	  
	  
  $sql1="select * from car_details c,customer_details cd where c.customer_id=cd.customer_id and car_id='$car_id'";
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
      <td>Service</td>
      <td>
	  <?php
	  include('db.php');
	 
	 
	   
	   $sql3="select * from service_details ";
	  $res3=$conn->query($sql3);
	 while($row3=mysqli_fetch_array($res3))
	 {
	$service_id=$row3['service_id'];
	  	     
			   $sql4="select * from book_service bs,booking_details bd,service_details sd where bs.booking_id=bd.booking_id and bs.service_id=sd.service_id and bd.car_id='$car_id' and sd.service_id='$service_id' and bd.status='Confirmed'";
	  $res4=$conn->query($sql4);
	 $row4=mysqli_fetch_array($res4);
	

	  ?>
	  <input type="checkbox" value="<?php echo $row3['service_id'];?>" <?php if($row3['service_id']==$row4['service_id']){  ?> checked <?php } ?> name="service_id[]" >&nbsp;<?php echo $row3['service_name'];?><br>
	  <?php 
	  
	  
	 }
	  ?>
	  <input type="hidden" value="<?php echo $row5['booking_id']; ?>" name="booking_id">
      </td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="jobcard_date" type="date" id="jobcard_date" value="<?php echo date('Y-m-d');?>" class=" form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Time</td>
      <td><input name="jobcard_time" type="time" id="jobcard_time" class=" form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Year Of MFD </td>
      <td><input name="year_of_mfd" type="number" min="2000" max="2099" step="1" vlaue="2019" id="year_of_mfd" class=" form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Fuel Type</td>
      <td>        <select name="fuel_type" id="fuel_type" class="form-control validate[required]">
        <option value="">Select Fuel Type</option>
        <option>Diesel</option>
        <option>Petrol</option>
		<option>GAS</option>
        </select></td>
    </tr>
    <tr>
      <td>Engine No</td>
      <td><input name="engine_no" type="text" id="engine_no" class=" form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Chassis No </td>
      <td><input name="chassis_no" type="text" id="chassis_no" class=" form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Total Kms </td>
      <td><input name="total_kms" type="text" id="total_kms" class=" form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Date Estimate </td>
      <td><input name="date_estimate" type="date" id="date_estimate" class=" form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Estimated Time </td>
      <td><input name="time_estimate" type="time" id="time_estimate" class=" form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Other Charges</td>
      <td><input name="price_estimate" type="text" id="price_estimate" class=" form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Employee Name </td>
      <td>
	  <select name="employee_id" id="employee_id" class=" form-control validate[required]">
	   <option value="">Select Employee</option>
	  <?php
	  include('db.php');
	  $sql3="select * from employee_details";
	  $res3=$conn->query($sql3);
	  while($row3=mysqli_fetch_array($res3))
	  {
	  ?>
	  <option value="<?php echo $row3['employee_id'];?>"><?php echo $row3['employee_name'];?></option>
	  <?php 
	  }
	  ?>
      </select>
	 </td>
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