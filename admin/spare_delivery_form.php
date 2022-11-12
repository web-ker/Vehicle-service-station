
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
                                    <h1>SPARE DELIVERY</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         	   <div class="all-form-element-inner">

<form name="formID" id="formID" method="post" action="spare_delivery_view.php">
  <table width="609" border="0" align="center">
    
    <tr>
      <td width="347">Jobcard No / Car Type / Customer Name </td>
      <td width="252"><select name="jobcard_id" id="jobcard_id" class="form-control validate,[required]">
	   <option value="">Select jobcard</option>
	  <?php
	  include('db.php');
	  $sql1="select * from   jobcard_details jd,car_details cd, customer_details c where jd.car_id=cd.car_id and cd.customer_id=c.customer_id and jd.jobcard_status='Service Pending'";
	  $res1=$conn->query($sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
	  <option value="<?php echo $row1['jobcard_id'];?>"><?php echo $row1['jobcard_id'];?> /  <?php echo $row1['car_make'];?> / <?php echo $row1['customer_name'];?></option>
	  <?php
	  }
	  ?>
	  
      </select></td>
    </tr>
   
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"  class="btn btn-success btn">
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