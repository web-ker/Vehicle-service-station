
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
                                    <h1>Cutomer Details View</h1>
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
  while($row=mysqli_fetch_array($res))
  {
  ?>
<form name="form1" method="post" id="formID"  class="form-horizontal">
  <table width="382" height="321" border="0" align="center">
               
    
 
  <tr>
    <td width="189"><strong>Customer ID </strong></td>
    <td width="183"><input type="text" name="" value="<?php echo $row['customer_id'];?>" class="form-control"></td>
    </tr>
  <tr>
    <td><strong>Custmoer name</strong> </td>
    <td><input type="text" name="" value="<?php echo $row['customer_name'];?>" class="form-control"></td>
    </tr>
  <tr>
    <td><strong>address</strong></td>
    <td><input type="text" name="" value="<?php echo $row['customer_add'];?>" class="form-control"></td>
    </tr>
  <tr>
    <td><strong>city</strong></td>
    <td><input type="text" name="" value="<?php echo $row['customer_city'];?>" class="form-control"></td>
    </tr>
  <tr>
    <td><strong>Contact no</strong> </td>
    <td><input type="text" name="" value="<?php echo $row['customer_contact_no'];?>" class="form-control"></td>
    </tr>
  <tr>
    <td><strong>Email</strong></td>
    <td><input type="text" name="" value="<?php echo $row['customer_email'];?>" class="form-control"></td>
    </tr>
  <tr>
    <td colspan="2"><div align="center"><a href="customer_edit.php?customer_id=<?php echo $row['customer_id'];?>" class="btn btn-info">EDIT </a>&nbsp;</div></td>
    </tr>

  <?php
  }
  ?>
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