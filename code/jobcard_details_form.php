<!DOCTYPE html>
<html lang="en">

<head>
<?php include('metadata.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
</head>

<body>

    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
   
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> JOB CARD DETAILS </h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">

<form name="formID" id="formID" method="post" action="jobcard_details_insert.php">
  <table width="320" border="0">
    <tr>
      <td colspan="2">Jobcard Details </td>
    </tr>
    <tr>
      <td width="157">Car </td>
      <td width="147"><select name="car_id" id="car_id" class=" form-control validate,[required]">
	   <option value="">Select car</option>
	   <?php
  include('db.php');
  $sql1="select * from car_details";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
	  <option value="<?php echo $row1['car_id'];?>"><?php echo $row1['car_make'];?></option>
	<?php
	}
	?>
	  
      </select></td>
    </tr>
    <tr>
      <td width="169">Customer</td>
      <td width="124"><select name="customer_id" id="customer_id" class="form-control validate,[required]">
	  <option value="">Select a Customer</option>
	   <?php
  include('db.php');
  $sql2="select * from customer_details";
  $res2=mysql_query($sql2);
  while($row2=mysql_fetch_array($res2))
  {
  ?>
	  <option value="<?php echo $row2['customer_id'];?>"><?php echo $row2['customer_name'];?></option>
	<?php
	}
	?>
	  </select>
	  </td>
    </tr>
    <tr>
      <td>Service</td>
      <td><select name="service_id" id="service_id" class=" form-control validate,[required]">
	   <option value="">Select Service</option>
	  <?php
	  include('db.php');
	  $sql3="select * from service_details";
	  $res3=mysql_query($sql3);
	  while($row3=mysql_fetch_array($res3))
	  {
	  ?>
	  <option value="<?php echo $row3['service_id'];?>"><?php echo $row3['service_name'];?></option>
	  <?php 
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="	jobcard_date" type="date" id="	jobcard_date" class=" form-control validate,[required,custom[date]]">></td>
    </tr>
    <tr>
      <td>Time</td>
      <td><input name="jobcard_time" type="time" id="jobcard_time" class=" form-control validate,[required]"></td>
    </tr>
    <tr>
      <td>Year Of MFD </td>
      <td><input name="year_of_mfd" type="date" id="year_of_mfd" class=" form-control validate,[required,custom[date]]">></td>
    </tr>
    <tr>
      <td>Fuel Type</td>
      <td><input name="fuel_type" type="text" id="fuel_type" class=" form-control validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Engine No</td>
      <td><input name="engine_no" type="text" id="engine_no" class=" form-control validate,[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Chassis No </td>
      <td><input name="chassis_no" type="text" id="chassis_no" class=" form-control validate,[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Total Kms </td>
      <td><input name="total_kms" type="text" id="total_kms" class=" form-control validate,[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Date Estimate </td>
      <td><input name="date_estimate" type="date" id="date_estimate" class=" form-control validate,[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Time Estimate</td>
      <td><input name="time_estimate" type="time" id="time_estimate" class=" form-control validate,[required]"></td>
    </tr>
    <tr>
      <td>Price Estimate</td>
      <td><input name="price_estimate" type="text" id="price_estimate" class=" form-control validate,[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Employee ID </td>
      <td><input name="employee_id" type="text" id="employee_id" class=" form-control validate,[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"  class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset"  class="btn btn-danger btn"></td>
    </tr>
  </table>
</form>
 </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- DATE TIME PICKERS -->

        
          <!-- /col-lg-12 -->
        </div>
        <!-- row -->
      </section>
      <?php include('footer.php');?>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
<?php include('script.php');?>
<?php
include('val.php');
?>

</body>

</html>
