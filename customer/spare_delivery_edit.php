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
        <h3><i class="fa fa-angle-right"></i> SPARE DELIVERY DETAILS </h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
<?php
include('db.php');
$spare_delivery_id=$_REQUEST['spare_delivery_id'];
$sql="select * from spare_delivery where spare_delivery_id='$spare_delivery_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res); 
?>
<form name="formID" id="formID" method="post" action="spare_delivery_update.php">
  <input type="hidden" name="spare_delivery_id" value="<?php echo $row['spare_delivery_id'];?>">
  <table width="361" border="0">
    <tr>
      <td colspan="2">Spare Delivery </td>
    </tr>
    <tr>
      <td width="166">Jobcard Id</td>
      <td width="179"><select name="jobcard_id" id="jobcard_id" class=" form-control validate,[required]">
        <option value="">select jobcard</option>
        <?php
	  include('db.php');
	  $sql1="select * from   jobcard_details";
	  $res1=mysql_query($sql1);
	  while($row1=mysql_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['jobcard_id'];?>"<?php if($row1['jobcard_id']==$row['jobcard_id']){ ?> selected <?php }?> ><?php echo $row1['jobcard_date'];?></option>
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
        <option value="<?php echo $row2['item_id'];?>"<?php if($row2['item_id']==$row['item_id']){ ?> selected <?php }?> ><?php echo $row2['item_name'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>d_item_qty</td>
      <td><input name="d_item_qty" type="text" id="d_item_qty" class="  form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['d_item_qty'];?>"></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="date" type="date" id="date" class=" form-control validate,[required,custom[date]]"  value="<?php echo $row['date'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
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
