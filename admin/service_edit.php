
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
                                    <h1>SERVICE DETAILS</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         	   <div class="all-form-element-inner">
          <form name="form1" method="post" action="service_update.php">
            <div class="form-panel">
              <?php
include('db.php');
$service_id=$_REQUEST['service_id'];
$sql="select * from service_details where service_id='$service_id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res); 
?>
              <input type="hidden" name="service_id" value="<?php echo $row['service_id'];?>">
              <table width="429" height="262" border="0">
                
                <tr>
                  <td width="167">Name</td>
                  <td width="121"><input name="service_name" type="text" id="service_name" class="form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['service_name'];?>"></td>
                </tr>
                <tr>
                  <td>Type</td>
                  <td><input name="service_type" type="text" id="service_type" class="  form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['service_type'];?>"></td>
                </tr>
                <tr>
                  <td>Charge</td>
                  <td><input name="service_charge" type="text" id="service_charge" class="  form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['service_charge'];?>"></td>
                </tr>
                <tr>
                  <td>Description</td>
                  <td><textarea name="service_description" class="  form-control validate,[required,custom[onlyLetter]]" id="service_description"><?php echo $row['service_description'];?></textarea></td>
                </tr>
                <tr>
                  <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
                      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
                      <a href="service_view.php" onClick="call()" class="btn btn-primary">Back</a>
              </table>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </form>
<script>
function call()
{

}
