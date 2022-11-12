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
                                    <h1>JOBCARD DETAILS VIEW</h1>
                                </div>
                            </div>
							<a href="jobcard_details.php" class="btn btn-success btn">Add New</a>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                     <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                  <tr>
      <th width="79">Jobcard ID</td>
      <th width="70">Car Make</th>
      <th width="83">Customer Name</th>
      <th width="120">Service&nbsp;Name</th>
      <th width="94">Jobcard Date </th>
    
     
      <th width="70">Total Kms</th>
      <th width="100">Date Estimate </th>
      <th width="110">Employee Name</th>
      <th width="90">More Details</th>
      <th width="45">Delete</th>
    </tr>
	</thead>
	<tbody>

	<?php 
	include('db.php');
	//$service_tot=0;
	$sql="select * from jobcard_details jd, car_details cd,customer_details cud,employee_details ed where jd.car_id=cd.car_id and cd.customer_id=cud.customer_id and  ed.employee_id=jd.employee_id";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	$jid=$row['jobcard_id'];
	?>
    <tr>
      <td>&nbsp;<?php echo $row['jobcard_id'];?></td>
      <td>&nbsp;<?php echo $row['car_make'];?></td>
      <td>&nbsp;<?php echo $row['customer_name'];?></td>
	  
      <td>&nbsp;
	  <?php
	  
	    $sql2="select * from jobcard_details jd,service_details sd, job_done jb where jd.jobcard_id=jb.jobcard_id and jb.service_id=sd.service_id and jb.jobcard_id='$jid'";
	$res2=$conn->query($sql2);
	while($row2=mysqli_fetch_array($res2))
	{
	 //$service_tot+=$row2['service_charge'];
	 ?> 
	  <li><?php echo $row2['service_name'];?>&nbsp; Rs.<?php echo $row2['service_charge']; ?></li>
	 <?php
	 }
	 ?> 
	 <br>
	 <hr>
	<!-- <b>Total Charges : <?php echo $service_tot; ?></b>-->
	  </td>
      <td>&nbsp;<?php echo $row['jobcard_date'];?></td>
      <td>&nbsp;<?php echo $row['total_kms'];?></td>
      <td>&nbsp;<?php echo $row['date_estimate'];?></td>
      <td>&nbsp;<?php echo $row['employee_name'];?></td>
      <td>&nbsp;<a href="jobcard_details_edit.php?jobcard_id=<?php echo $row['jobcard_id'];?>" class="btn btn-primary">More Details</a></td>
      <td>&nbsp;<a href="jobcard_details_delete.php?jobcard_id=<?php echo $row['jobcard_id'];?>"onclick="return confirm('do you want to delete?')"><img src="../IMAGES/delete.png"width="30" height="30"></a></td>
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

 <?php include('script.php'); ?>
</body>

</html>