
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
<form name="formID" id="formID" method="post" action="customer_insert.php">
  <table width="342" height="382" border="0">
    <tr>
      
	 
    </tr>
    <tr>
      <td width="166">Name</td>
      <td width="160"><input name="customer_name" type="text" id="customer_name" class=" form-control validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input name="customer_add" type="text" id="customer_add" class=" form-control validate,[required]"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="customer_city" type="text" id="customer_city" class=" form-control validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Contact no</td>
      <td><input name="customer_contact_no" type="text" id="customer_contact_no"  pattern="^[A-Z]{2}\s[0-9]{2}\s[A-Z]{2}\s[0-9]{4}$" ></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="customer_email" type="text" id="customer_email" class="form-control validate,[required,custom[email]]"></td>
    </tr>
    <tr>
      <td colspan="2">
	  <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input name="Reset" type="reset" value="Reset"class="btn btn-danger btn">
	  <a href="customer_view.php" onClick="call()" class="btn btn-primary">Back</a>
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