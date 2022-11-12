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
                                    <h1>Booking Details View</h1>
                                </div>
                            </div>
							<a href="booking_details.php" class="btn btn-info">Add New Booking</a>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                     <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
    <tr>
      <th>B-ID</th>
      <th>Customer Name</th>
      <th>Service Name </th>
	  <th>Car Make </th>
	  <th>Car Model</th>
      <th>Booking Time </th>
      <th>Booking Date </th>
      <th>Status</th>
   
      <th>Cancel</th>
    </tr>
	</thead>
	<tbody>
	<?php
  include('db.php');
  $uname=$_SESSION['uname'];
   $sql="select * from booking_details bd, customer_details cd, car_details c where bd.car_id=c.car_id and c.customer_id=cd.customer_id  and cd.customer_email='$uname'";
  $res=$conn->query($sql);
  while($row=mysqli_fetch_array($res))
  {
  $b_id=$row['booking_id'];
  ?>
    <tr>
      <td>&nbsp;<?php echo $row['booking_id'];?></td>
      <td>&nbsp;<?php echo $row['customer_name'];?></td>
   
      <td><?php
	  $tot_charges=0;
	  $sql2="select * from book_service bs, service_details sd where bs.service_id=sd.service_id and bs.booking_id='$b_id'";
  $res2=$conn->query($sql2);
  while($row2=mysqli_fetch_array($res2))
  {
  $tot_charges=$tot_charges+$row2['service_charge'];
  ?><li> <?php echo $row2['service_name'];?> &nbsp; Rs. <?php echo $row2['service_charge'];?></li>
  <?php
	}
	?>
	
  <hr>
 <?php echo $tot_charges; ?>
	   </td>
      <td>&nbsp;<?php echo $row['car_make'];?></td>
	  <td>&nbsp;<?php echo $row['car_model'];?></td>
      <td>&nbsp;<?php echo $row['booking_time'];?></td>
      <td>&nbsp;<?php echo $row['booking_date'];?></td>
      <td>&nbsp;<?php if($row['status']=='Pending') { ?> <p class="btn btn-warning"><?php echo $row['status'];?></p> <?php } else { ?><p class="btn btn-info"><?php echo $row['status'];?></p> <?php } ?></td>
           <td>&nbsp;<a href="booking_delete.php?booking_id=<?php echo $row['booking_id'];?>" class="btn btn-danger">Cancel</a></td>
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

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>