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
                                    <h1>Biling Details View</h1>
                                </div>
                            </div>
							<!--  <a href="spare_details_form.php" class="btn btn-success btn">Add New</a> -->
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                     <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                  <tr>
      <th><a>Bill Id </a></th>
      <th><a>Jobcard No </a></th>
	  <th><a>Car Name </a></th>
	  <th><a>Customer Name </a></th>
      <th><a>Service_Amount</a> </th>
      <th><a>Spare_Amount</a> </th>
	    <th><a>Sub Total</a></th>
	    <th><a>GST</a></th>
		  <th><a>Total&nbsp;Amount</a></th>
    
    
      <th><a>Bill_Date</a></th>
		<th>Print</th>
        <th><a>Delete</a></th>
    </tr>
	</thead>
	<tbody>
	<?php
  include('db.php');
  $sql="select * from billing_details bd,jobcard_details jd,customer_details cd , car_details c where bd.jobcard_id=jd.jobcard_id and cd.customer_id=c.customer_id and jd.car_id=c.car_id ";
  $res=$conn->query($sql);
  while($row=mysqli_fetch_array($res))
  {
  $jobcard_id=$row['jobcard_id'];
 
  
   $sql2="select sum(labour_charges) as lc from spare_delivery where jobcard_id='$jobcard_id' ";
  $res2=$conn->query($sql2);
  $row2=mysqli_fetch_array($res2);
  $labour_charges=$row2['lc'];
  
  $sp=$row['spare_amount']-$labour_charges;
  
  $total_amt=$row['service_amount']+$sp+$labour_charges+$row['price_estimate'];
   $gst=($total_amt*18)/118;
  
  $tot=$total_amt+$gst;
  ?>
    <tr>
      <td>&nbsp;<?php echo $row['bill_id'];?></td>
      <td>&nbsp;<?php echo $row['jobcard_id'];?></td>
	   <td>&nbsp;<?php echo $row['car_make'];?></td>
	    <td>&nbsp;<?php echo $row['customer_name'];?></td>
      <td>&nbsp;<?php echo $row['service_amount'];?></td>
      <td>&nbsp;<?php echo $sp;?></td>
	  <td>&nbsp;<b><?php echo $total_amt;?></b></td>
	  <td>&nbsp;<?php echo round($gst);?></td>
	   <td>&nbsp;<b><?php echo round($tot);?></b></td>
     
      
      <td>&nbsp;<?php echo $row['bill_date'];?></td>
      <td>&nbsp;<a href="billing_details_view_print.php?b_id=<?php echo $row['bill_id'];?>" class="btn btn-primary">Print</a></td>

	  <td>&nbsp;<a href="billing_details_delete.php?b_id=<?php echo $row['bill_id'];?>" onclick="return confirm('do you want to delete?')"><img src="../IMAGES/delete.png"width="30" height="30"></a></td>
    </tr>
	<?php 
	}
	?>
	</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
<?php include('footer.php'); ?>

 <?php //include('script.php'); ?>
</body>

</html>