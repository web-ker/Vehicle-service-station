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
        <h3><i class="fa fa-angle-right"></i>BILLING DETAILS EDIT</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
<?php
include('db.php');

$b_id=$_REQUEST['b_id'];
$sql="select * from billing_details where bill_id='$b_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="formID" id="formID" method="post" action="billing_details_update.php">
<input type="hidden" name="b_id" value="<?php echo $row['bill_id'];?>">
  <table width="293" border="0">
    <tr>
      <td colspan="2">Bill Details</td>
    </tr>
    <tr>
      <td>Jobcard Id</td>
      <td><select name="jobcard_id" id="jobcard_id"class="form-control validate,[required]">
        <option value="">select jobcard</option>
        <?php
	  include('db.php');
	   $sql3="select * from   jobcard_details";
	  $res3=mysql_query($sql3);
	  while($row3=mysql_fetch_array($res3))
	  {
	  ?>
        <option value="<?php echo $row3['jobcard_id'];?>" <?php if($row3['jobcard_id']==$row['jobcard_id']){ ?> selected <?php }?> ><?php echo $row3['jobcard_id'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>service_amount</td>
      <td><input name="service_amount" type="text" id="service_amount" class="form-control  validate,[required,custom[onlyNumber]]" value="<?php echo $row['service_amount'];?>"></td>
    </tr>
    <tr>
      <td>spare_amount </td>
      <td><input name="spare_amount" type="text" id="spare_amount" class=" form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['spare_amount'];?>"></td>
    </tr>
    <tr>
      <td>total_amt</td>
      <td><input name="total_amt" type="text" id="total_amt" class="form-control validate,[required,custom[onlyNumber]]"value="<?php echo $row['total_amt'];?>"></td>
    </tr>
    <tr>
      <td>payment_status</td>
      <td><input name="payment_status" type="text" id="payment_status" class="form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['payment_status'];?>"></td>
    </tr>
    <tr>
      <td>gst</td>
      <td><input name="gst" type="text" id="gst" class="form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['gst'];?>"></td>
    </tr>
    <tr>
      <td>bill_date</td>
      <td><input name="bill_date" type="date" id="bill_date" class="form-control validate,[required,custom[date]]"  value="<?php echo $row['bill_date'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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
