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
        <h3><i class="fa fa-angle-right"></i> SPARE DETAILS </h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
<?php
include('db.php');
$item_id=$_REQUEST['item_id'];
$sql="select * from spare_details where item_id='$item_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res); 
?>
<form name="formID" id="formID" method="post" action="spare_details_update.php">
 <input type="hidden" name="item_id" value="<?php echo $row['item_id'];?>">
  <table width="388" border="0">
    <tr>
      <td colspan="2">Spare Details</td>
    </tr>
    <tr>
      <td width="167">Item Name </td>
      <td width="205"><input name="item_name" type="text" id="item_name" class=" form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['item_name'];?>"></td>
    </tr>
    <tr>
      <td>Item Code </td>
      <td><input name="item_code" type="text" id="item_code" class="form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['item_code'];?>"></td>
    </tr>
    <tr>
      <td>Item Description</td>
      <td><input name="item_description" type="text" id="item_description" class="form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['item_description'];?>"></td>
    </tr>
    <tr>
      <td>Item Quantity </td>
      <td><input name="s_item_qty" type="text" id="s_item_qty" class="form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['s_item_qty'];?>"></td>
    </tr>
    <tr>
      <td>Item Reorder Quantity</td>
      <td><input name="item_reorder_qty" type="text" id="item_reorder_qty" class="form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['item_reorder_qty'];?>"></td>
    </tr>
    <tr>
      <td>Item Price </td>
      <td><input name="item_price" type="text" id="item_price" class="form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['item_price'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
