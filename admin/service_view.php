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
                                    <h1>Service Details View</h1>
                                </div>
                            </div>
							  <a href="service_form.php" class="btn btn-success btn">Add New</a>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                     <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                  <tr>
      <th>Service Id </th>
      <th>Service Name</th>
      <th>Service Type </th>
      <th>Service Charge</th>
      <th>Service Description </th>
      <th>Edit </th>
      <th>Delete</th>
    </tr>
		</thead>
	<tbody>
	<?php 
	include('db.php');
	$sql="select * from service_details";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $row['service_id'];?></td>
      <td>&nbsp;<?php echo $row['service_name'];?></td>
      <td>&nbsp;<?php echo $row['service_type'];?></td>
      <td>&nbsp;<?php echo $row['service_charge'];?></td>
      <td>&nbsp;<?php echo $row['service_description'];?></td>
      <td>&nbsp;<a href="service_edit.php?service_id=<?php echo $row['service_id'];?>"><img src="../IMAGES/edit.png"width="30" height="30"</a></a></td>
      <td>&nbsp;<a href="service_delete.php?service_id=<?php echo $row['service_id'];?>"onclick="return confirm('do you want to delete?')"><img src="../IMAGES/delete.png"width="30" height="30"</a></a></td>
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