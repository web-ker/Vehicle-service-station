
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
                                    <h1>SPARE DETAILS</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         	   <div class="all-form-element-inner">
<?php
include('db.php');
$item_id=$_REQUEST['item_id'];
$sql="select * from spare_details where item_id='$item_id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res); 
?>
<form name="formID" id="formID" method="post" action="spare_details_update.php">
 <input type="hidden" name="item_id" value="<?php echo $row['item_id'];?>">
  <table width="388" height="519" border="0" align="center">
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
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
	  <a href="spare_details_view.php" onClick="call()" class="btn btn-primary">Back</a>
<script>
function call()
{

}
</script></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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