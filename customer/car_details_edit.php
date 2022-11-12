
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
                                    <h1>VEHICLE DETAILS</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         	   <div class="all-form-element-inner">
 <?php
 include('db.php');
 $car_id=$_REQUEST['car_id'];
 $sql="select * from car_details details where car_id='$car_id'";
 $res=$conn->query($sql);
 $row=mysqli_fetch_array($res); 
 ?>
  <form name="formID" id="formID" method="post" action="car_details_update.php">
  <input type="hidden"name="car_id"value="<?php echo $row['car_id'];?>">
  <table width="390" height="263" border="0">
    <tr>
      <td colspan="2"></td>
    </tr>
   <tr>
      <td width="156">Customer</td>
      <td width="224"><input type="hidden" name="customer_id" id="customer_id" value="<?php echo $row['customer_id']?>">
	
	   <?php

  $sql1="select * from customer_details where customer_id=".$row['customer_id']."";
  $res1=$conn->query($sql1);
$row1=mysqli_fetch_array($res1);
 
  ?>
	  <input type="text" value="<?php echo $row1['customer_name'];?>" readonly class="form-control">
	  <input type="hidden" value="<?php echo $row1['customer_id'];?>" name="customer_id" readonly class="form-control">
	
	  
	  </td>
    </tr>
    <tr>
      <td height="25">VehicleMake</td>
      <td><select name="car_make" id="car_make" class="form-control validate[required]" >
        <option value="">Select</option>
        <option value="MARUTI SUZUKI" <?php  if($row['car_make']=='MARUTI SUZUKI') {?> selected <?php } ?> >MARUTI SUZUKI</option>
        <option value="TATA MOTORS" <?php  if($row['car_make']=='TATA MOTORS') {?> selected <?php } ?> >TATA MOTORS</option>
        <option value="MAHINDRA" <?php  if($row['car_make']=='MAHINDRA') {?> selected <?php } ?> >MAHINDRA</option>
        <option value="RENAULT" <?php  if($row['car_make']=='RENAULT') {?> selected <?php } ?> >RENAULT</option>
        <option value="CHEVROLET" <?php  if($row['car_make']=='CHEVROLET') {?> selected <?php } ?> >CHEVROLET</option>
        <option value="TOYOTA" <?php  if($row['car_make']=='TOYOTA') {?> selected <?php } ?> >TOYOTA</option>
        <option value="NISSAN" <?php  if($row['car_make']=='NISSAN') {?> selected <?php } ?> >NISSAN</option>
        <option value="HYUNDAI" <?php  if($row['car_make']=='HYUNDAI') {?> selected <?php } ?> >HYUNDAI</option>
        <option value="FORD" <?php  if($row['car_make']=='FORD') {?> selected <?php } ?> >FORD</option>
        <option value="HONDA" <?php  if($row['car_make']=='HONDA') {?> selected <?php } ?> >HONDA</option>
        <option value="VOLKSWAGEN" <?php  if($row['car_make']=='VOLKSWAGEN') {?> selected <?php } ?> >VOLKSWAGEN</option>
        <option value="FIAT" <?php  if($row['car_make']=='FIAT') {?> selected <?php } ?>>FIAT</option>
      </select>
	  
</td>
    </tr>
    <tr>
      <td>Vehicle Model </td>
      <td><input name="car_model" type="text" id="car_model" class=" form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['car_model'];?>"></td>
    </tr>
    <tr>
      <td>Vehicle RegNO </td>
      <td><input name="car_regno" type="text" id="car_regno" class=" form-control validate,[required]" pattern="^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{1,2,3,4}$" placeholder="eg:KA 31 HG 1234" value="<?php echo $row['car_regno'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Save" class="btn btn-success btn">
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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