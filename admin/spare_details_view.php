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
                                    <h1>Spare Details View</h1>
                                </div>
                            </div>
							 <a href="spare_details_form.php" class="btn btn-success btn">Add New</a>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                     <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                  <tr>
      <th>Item Id</th>
      <th>Item Name</th>
      <th>Item Code</a></th>
      <th>Item Description</a></th>
      <th>s_item_qty</th>
      <th>Item Reorder Qty</a></th>
      <th >Item Price</a></th>
      <th>Edit </a></th>
      <th>Delete</a></th>
    </tr>
		</thead>
	<tbody>
	<?php 
	include('db.php');
	$sl=01;
	$sql="select * from Spare_details";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row['item_name'];?></td>
      <td>&nbsp;<?php echo $row['item_code'];?></td>
      <td>&nbsp;<?php echo $row['item_description'];?></td>
      <td>&nbsp;<?php echo $row['s_item_qty'];?></td>
      <td>&nbsp;<?php echo $row['item_reorder_qty'];?></td>
      <td>&nbsp;<?php echo $row['item_price'];?></td>
      <td>&nbsp;<a href="spare_details_edit.php?item_id=<?php echo $row['item_id'];?>"><img src="../IMAGES/edit.png"width="30" height="30"</a></a></td>
      <td>&nbsp;<a href="spare_details_delete.php?item_id=<?php echo $row['item_id'];?>"onclick="return confirm('do you want to delete?')"><img src="../IMAGES/delete.png"width="30" height="30"</a></a></td>
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