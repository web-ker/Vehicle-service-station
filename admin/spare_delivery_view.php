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
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Spare Delivery</h1>
                                </div>
                            </div>
							
		
		
        <form name="formID" id="formID" method="post" action="spare_delivery_insert.php">
  <table width="843" height="295" border="0">
   
    <tr>
      <td width="166">Jobcard No </td>
      <td width="179"><select name="jobcard_id" id="jobcard_id" class="form-control validate,[required]">
	 
	  <?php
	  $jobcard_id=$_REQUEST['jobcard_id'];
	  include('db.php');
	  $sql1="select * from   jobcard_details jd,car_details cd, customer_details c where  jd.jobcard_id='$jobcard_id' and jd.car_id=cd.car_id and cd.customer_id=c.customer_id ";
	  $res1=$conn->query($sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
	  <option value="<?php echo $row1['jobcard_id'];?>"><?php echo $row1['jobcard_id'];?> /  <?php echo $row1['car_make'];?> / <?php echo $row1['customer_name'];?></option>
	  <?php
	 
	  }
	  ?>
	  
      </select></td>
      <td width="179"><div align="center">Date</div></td>
      <td width="179"><input name="date" value="<?php echo date('Y-m-d'); ?>" type="date" id="date"class=" form-control validate,[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Select Item </td>
      <td><select name="item_id" id="item_id"class="form-control validate,[required]">
	  <option value="">Select item</option>
	   <?php
	  include('db.php');
	  $sql2="select * from  spare_details";
	  $res2=$conn->query($sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
	  <option value="<?php echo $row2['item_id'];?>"><?php echo $row2['item_name'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
      <td><div align="center">Item Qty </div></td>
      <td><input name="d_item_qty" type="text" id="d_item_qty" class="form-control validate,[required,custom[onlyNumber]]"></td>
    </tr>
    
    <tr>
      <td>Labour Charges </td>
      <td><input name="labour_charges" type="text" value="0" id="labour_charges" class="form-control validate,[required,custom[onlyNumber]]"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><input type="submit" name="Submit" value="Submit"  class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
	  <a href="spare_delivery_form.php" onClick="call()" class="btn btn-primary">Back</a>
<script>
function call()
{

}
</script></td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

          <!-- page start-->
        <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                     <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                  <tr>
      <th><a>Delivey Id</a></th>
      <th><a>Jobcard No </a></th>
      <th><a>Item Name </a></th>
	  <th><a>Item Price </a></th>
      <th><a>Item Qty</a></th>
	  <th><a>Labour Charges</a></th>
	   <th><a>Item Amount</a></th>
      <th><a>Date</a></th>
           <th><a>Delete</a></th>
    </tr>
		</thead>
	<tbody>
	<?php 
	include('db.php');
	$total=0;
	$sql="select * from spare_delivery sdd,jobcard_details jd, spare_details sp where sdd.jobcard_id=jd.jobcard_id and sdd.item_id=sp.item_id and sdd.jobcard_id='$jobcard_id'";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	$amount=($row['item_price']*$row['d_item_qty'])+$row['labour_charges'];
	$total=$total+$amount;
	?>
    <tr>
      <td>&nbsp;<?php echo $row['spare_delivery_id'];?></td>
      <td>&nbsp;<?php echo $row['jobcard_id'];?></td>
      <td>&nbsp;<?php echo $row['item_name'];?></td>
	  <td>&nbsp;<?php echo $row['item_price'];?></td>
      <td>&nbsp;<?php echo $row['d_item_qty'];?></td>
	  <td>&nbsp;<?php echo $row['labour_charges'];?></td>
	  <td>&nbsp;<b><?php echo $amount;?></b></td>
      <td>&nbsp;<?php echo $row['date'];?></td>
       <td>&nbsp;<a href="spare_delivery_delete.php?spare_delivery_id=<?php echo $row['spare_delivery_id'];?>&jobcard_id=<?php echo $jobcard_id;?>"onclick="return confirm('do you want to delete?')"><img src="../IMAGES/delete.png"width="30" height="30"</a></a></td>
    </tr>
	<?php 
	}
	$service_amount=0;
	 $sql2="select * from jobcard_details jd,job_done jb, service_details sd where jb.service_id=sd.service_id and jb.jobcard_id=jd.jobcard_id and jb.jobcard_id='$jobcard_id'";
	$res2=$conn->query($sql2);
	while($row2=mysqli_fetch_array($res2))
	{
	
	
	
	$service_amount=$service_amount+$row2['service_charge'];
	} 
	?>
	
 </tbody>
           <a href="billing_details_insert.php?jobcard_id=<?php echo $jobcard_id;?>&spare_amount= <?php echo $total;?>&service_amount=<?php echo $service_amount;?>" class="btn btn-primary">&nbsp;&nbsp;Genrate Bill</a>                          </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
<?php include('footer.php'); ?>

 <?php include('script.php'); ?>
</body>

</html>