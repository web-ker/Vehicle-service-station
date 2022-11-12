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
        <h3><i class="fa fa-angle-right"></i> CAR DETAILS</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">

<form name="formID" id="formID" method="post" action="car_details_insert.php">
  <table width="309" border="0">
    <tr>
      <td colspan="2">Car Details</td>
    </tr>
    <tr>
      <td width="169">Customer</td>
      <td width="124"><select name="customer_id" id="customer_id" class=" form-control validate,[required]">
	  <option value="">Select a Customer</option>
	   <?php
  include('db.php');
  $sql1="select * from customer_details";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
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
      <td><input name="car_make" type="text" id="car_make" class=" form-control validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Car Model </td>
      <td><input name="car_model" type="text" id="car_model" class="form-control validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Car RegNO </td>
      <td><input name="car_regno" type="text" id="car_regno" class="form-control validate,[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"  class="btn btn-success btn">
          <input type="reset" name="Reset" value="Reset"  class="btn btn-danger btn">
      </td>
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
