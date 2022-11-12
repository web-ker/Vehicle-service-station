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
        <h3><i class="fa fa-angle-right"></i> CUSTOMER DETAILS </h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel"><?php
include('db.php');
$customer_id=$_REQUEST['customer_id'];
$sql="select * from customer_details where customer_id='$customer_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?> 
<form name="formID"id="formID" method="post" action="customer_update.php">
<input type="hidden"  name="customer_id"  value="<?php echo $row['customer_id'];?>">
  <table width="342" border="0">
    <tr>
      <td colspan="2">Customer Details</td>
	 
    </tr>
    <tr>
      <td width="166">Name</td>
      <td width="160"><input name="customer_name" type="text" id="customer_name" class="form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['customer_name'];?>"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input name="customer_add" type="text" id="customer_add" class="form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['customer_add'];?>"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="customer_city" type="text" id="customer_city" class="form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['customer_city'];?>"></td>
    </tr>
    <tr>
      <td>Contact no</td>
      <td><input name="customer_contact_no" type="text" id="customer_contact_no" class="form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['customer_contact_no'];?>"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="customer_email" type="text" id="customer_email" class="form-control validate,[required,custom[email]]" value="<?php echo $row['customer__email'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input name="Reset" type="reset" value="Reset" class="btn btn-danger btn"></td>
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
