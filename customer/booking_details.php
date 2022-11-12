
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
                                    <h1>BOOKING DETAILS</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         	   <div class="all-form-element-inner">
			
<form name="formID" id="formID" method="post" action="booking_insert.php">
 
  <div align="center">
    <table width="570" height="269"  border="0">
     
      <tr>
        <td>Select Services</td>
        <td>
	  <?php
	  include('db.php');
	  $sql3="select * from service_details";
	  $res3=$conn->query($sql3);
	  while($row3=mysqli_fetch_array($res3))
	  {
	  ?>
	  <input type="checkbox" value="<?php echo $row3['service_id'];?>" name="service_id[]">&nbsp;<?php echo $row3['service_name'];?><br>
	  <?php 
	  }
	  ?>
      </td>
      </tr>
      <tr>
        <td>Vehicle Make</td>
        <td><select name="car_id" id="car_id" class=" form-control validate[required]">
	  <option value="">Select Car</option>
	  <?php
	  include('db.php');
	  $uname=$_SESSION['uname'];
	  $sql2="select * from  car_details c, customer_details cd where c.customer_id=cd.customer_id and cd.customer_email='$uname'";
	  $res2=$conn->query($sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
	  <option value="<?php echo $row2['car_id'];?>"><?php echo $row2['car_make'];?> / <?php echo $row2['car_model'];?> / <?php echo $row2['customer_name'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
      </tr>
      <tr>
        <td>Booking Time</td>
        <td><input name="booking_time" type="time"  id="booking_time" required class=" form-control validate[required]"></td>
      </tr>
      <tr>
        <td>Booking Date</td>
        <td><input name="booking_date" type="date"  id="booking_date" class=" form-control validate[required]"></td>
      </tr>
       <tr>
        <td colspan="2">         <div align="center">
           <input type="submit" name="Submit" value="Submit" class="btn btn-success">
           <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
        </div></td>
       </tr>
     
  </table>
    </p>
  </div>

</form>
<a href="booking_view.php" onClick="call()" class="btn btn-primary">Back</a>
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