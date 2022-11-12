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
        <h3><i class="fa fa-angle-right"></i> Billing details </h3>
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
      <td width="128">Service Id</td>
      <td width="178"><select name="service_id" id="service_id" class=" form-control validate,[required]">
          <option value="">Select Service</option>
          <?php
	  include('db.php');
	  $sql1="select * from service_details";
	  $res1=mysql_query($sql1);
	  while($row1=mysql_fetch_array($res1))
	  {
	  ?>
          <option value="<?php echo $row1['service_id'];?>"<?php  if($row1['service_id']==$row['service_id']){ ?> selected <?php }?> ><?php echo $row1['service_name'];?></option>
          <?php 
	  }
	  ?>
      </select></td>
    </tr>
    <tr> 
      <td>Item Id </td>
      <td><select name="item_id" id="item_id" class=" form-control validate,[required]">
        <option value="">select item</option>
        <?php
	  include('db.php');
	  $sql2="select * from  spare_details";
	  $res2=mysql_query($sql2);
	  while($row2=mysql_fetch_array($res2))
	  {
	  ?>
        <option value="<?php echo $row2['item_id'];?>"<?php  if($row2['item_id']==$row['item_id']){ ?> selected <?php }?> ><?php echo $row2['item_name'];?></option>
        <?php
	  }
	  ?>
      </select></td>
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
        <option value="<?php echo $row3['jobcard_id'];?>" <?php if($row3['jobcard_id']==$row['jobcard_id']){ ?> selected <?php }?> ><?php echo $row3['jobcard_date'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Service Date </td>
      <td><input name="service_date" type="date" id="service_date" class="form-control  validate,[required]" value="<?php echo $row['service_date'];?>"></td>
    </tr>
    <tr>
      <td>Service Description </td>
      <td><input name="service_description" type="text" id="service_description" class=" form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['service_description'];?>"></td>
    </tr>
    <tr>
      <td>Total Amount</td>
      <td><input name="total_amt" type="text" id="total_amt" class="form-control validate,[required,custom[onlyNumber]]"value="<?php echo $row['total_amt'];?>"></td>
    </tr>
    <tr>
      <td>Payment Status</td>
      <td><input name="payment_status" type="text" id="payment_status" class="form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['payment_status'];?>"></td>
    </tr>
    <tr>
      <td>cgst</td>
      <td><input name="cgst" type="text" id="cgst" class="form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['cgst'];?>"></td>
    </tr>
    <tr>
      <td>sgst</td>
      <td><input name="sgst" type="text" id="sgst" class="form-control validate,[required,custom[onlyNumber]]"  value="<?php echo $row['sgst'];?>"></td>
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
<?PHP
include('val.php');
?>

</body>

</html>
