
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

<form name="formID" id="formID" method="post" action="car_details_insert.php">
  <table width="399" height="424" border="0" align="center">
  
    <tr>
      <td width="169">Customer</td>
      <td width="124"><select name="customer_id" id="customer_id" class=" form-control validate,[required]">
	  <option value="">Select a Customer</option>
	   <?php
  include('db.php');
  $sql1="select * from customer_details";
  $res1=$conn->query($sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
	  <option value="<?php echo $row1['customer_id'];?>"><?php echo $row1['customer_name'];?></option>
	<?php
	}
	?>
	  </select>
	  </td>
    </tr>
    <tr>
      <td height="25">Car Make</td>
      <td><select name="car_make" id="car_make" class=" form-control validate[required]">
        <option value="">Select</option>
        <option value="MARUTI SUZUKI">MARUTI SUZUKI</option>
        <option value="TATA MOTORS">TATA MOTORS</option>
        <option value="MAHINDRA">MAHINDRA</option>
        <option value="RENAULT">RENAULT</option>
        <option value="CHEVROLET">CHEVROLET</option>
        <option value="TOYOTA">TOYOTA</option>
        <option value="NISSAN">NISSAN</option>
        <option value="HYUNDAI">HYUNDAI</option>
        <option value="FORD">FORD</option>
        <option value="HONDA">HONDA</option>
        <option value="VOLKSWAGEN">VOLKSWAGEN</option>
        <option value="FIAT">FIAT</option>
      </select></td>
    </tr>
    <tr>
      <td>Car Model </td>
      <td><input name="car_model" type="text" id="car_model" class="form-control validate,[required]"></td>
    </tr>
    <tr>
      <td>Car RegNO </td>
      <td><input name="car_regno" type="text" id="car_regno" pattern="^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{1,2,3,4}$" placeholder="eg:KA 23 HG 1234" class="form-control validate,[required]"></td>
    </tr>
    <tr>
      <td colspan="2">
	  
	  <input type="submit" name="Submit" value="Submit"  class="btn btn-success btn">
          <input type="reset" name="Reset" value="Reset"  class="btn btn-danger btn">
		   <a href="car_details_view.php" onClick="call()" class="btn btn-primary">Back</a>
<script>
function call()
{

}
</script>
      </td>
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