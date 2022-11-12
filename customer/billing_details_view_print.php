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
<script type="text/javascript">   
   
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
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
							<div id="divToPrint">
							<!-- <a href="booking_details.php" class="btn btn-info">Add New Booking</a> -->
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                     


              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" 
                                        >
                  <!--                       <thead>
                  <tr>
                    <th colspan="3">GSTIN : 2 9ACEFS6641P2ZU </th>
                    <th colspan="3"><div align="right">Narendra V : 9880500609 </div></th>
                  </tr> -->
                  <tr>
                    <th colspan="6"><div align="center"><font size="+4">SRI RAMA AUTOMOTIVES</font><br>
                     <font size="+1"> All multibrand car service station<br>
                      Near BKT MIll, Bellary Road, Challekere<br>
                      Chitradurga Dist, Karnataka -577522 </font></div></th>
                  </tr>
				  <?php
				  
				  include('db.php');
				  $b_id=$_REQUEST['b_id'];
  $sql="select * from billing_details bd,jobcard_details jd,customer_details cd , car_details c where bd.jobcard_id=jd.jobcard_id and cd.customer_id=c.customer_id and jd.car_id=c.car_id and bd.bill_id='$b_id'";
  $res=$conn->query($sql);
 $row=mysqli_fetch_array($res);
 $job_id=$row['jobcard_id'];
  ?>
                  <tr>
      <th colspan="2"><a>Bill Id </a><?php echo $row['bill_id'];?></th>
      <th>&nbsp;</th>
	  <th colspan="2">&nbsp;</th>
	  <th><a>Bill_Date&nbsp;:&nbsp;</a><?php echo $row['bill_date'];?></th>
      <th>&nbsp; </th>
      </tr>
	</thead>
	<tbody>
	<?php
  
  $gst=($row['total_amt']*18)/118;
  
  $tot=$row['total_amt']+$gst;
  ?>
    <tr>
      <td colspan="2">&nbsp;<a>Customer Name</a> : <?php echo $row['customer_name'];?></td>
      <td>&nbsp;</td>
	   <td colspan="2"><a>Jobcard No</a> : <?php echo $row['jobcard_id'];?></td>
	    <td>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td colspan="2">Address : <?php echo $row['customer_add'];?></td>
      <td>&nbsp;</td>
      <td colspan="2">KM : <?php echo $row['total_kms'];?></td>
      <td>Engine No :  <?php echo $row['engine_no'];?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">Make:  <?php echo $row['car_make'];?></td>
      <td>Chassis No : <?php echo $row['chassis_no'];?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">Mobile No : <?php echo $row['customer_contact_no'];?></td>
      <td>&nbsp;</td>
      <td colspan="2">Model : <?php echo $row['car_model'];?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <th>Sl No </th>
      <th>DESCRIPTION / PARTS</th>
      <th>QNT</th>
      <th>Rate</th>
      <th>LABOR CHARGES </th>
      <th>TOTAL AMOUNT </th>
      <td>&nbsp;</td>
      </tr>
	<?php
	$sl=1;
	$iteam_tot=0;
	  $sql2="select * from jobcard_details jd,spare_details sd,spare_delivery sp where jd.jobcard_id=sp.jobcard_id and sd.item_id=sp.item_id and sp.jobcard_id='$job_id'";
  $res2=$conn->query($sql2);
 while($row2=mysqli_fetch_array($res2))
 {
 $tot_spare=($row2['d_item_qty']*$row2['item_price'])+$row2['labour_charges'];
 $iteam_tot=$iteam_tot+$tot_spare
	?>  
    <tr>
      <td>&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row2['item_name'];?></td>
      <td>&nbsp;<?php echo $row2['d_item_qty'];?></td>
      <td>&nbsp;<?php echo $row2['item_price'];?></td>
      <td>&nbsp;<?php echo $row2['labour_charges'];?></td>
      <td>&nbsp;<?php echo $tot_spare;?></td>
      <td>&nbsp;</td>
    </tr>
	<?php
	}
	?>
	
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th>&nbsp;</th>
      <th>&nbsp;Service Details</th>
      <th>&nbsp;</th>
      <th colspan="2">&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
	 <tr>
      <td>&nbsp;<?php echo $sl;?></td>
      <td><?php
	  $service_tot=0;
	    $sql3="select * from jobcard_details jd,job_done jb,service_details sd where jd.jobcard_id=jb.jobcard_id and sd.service_id=jb.service_id and jb.jobcard_id='$job_id'";
  $res3=$conn->query($sql3);
 while($row3=mysqli_fetch_array($res3))
 {
 $service_tot=$service_tot+$row3['service_charge'];
 ?>
 <li><?php echo $row3['service_name'];?> &nbsp; <b>(Rs.<?php echo $row3['service_charge'];?> )</b></li>
 <?php
 }
 ?>

	  
	  </td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;<?php echo $service_tot; ?></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
       <td colspan="2">&nbsp;</td>
       <td>&nbsp;</td>
       <td colspan="2"><div align="right"><strong>Other Charges </strong></div></td>
       <td><?php echo $row['price_estimate']; ?>&nbsp;</td>
       <td>&nbsp;</td>
     </tr>
     <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><div align="right"><strong>SUB TOTAL </strong></div></td>
      <td>&nbsp;<?php echo $sub_tot=$iteam_tot+$service_tot+$row['price_estimate']; ?></td>
      <td>&nbsp;</td>
	  <?php
	  $gst=round(($sub_tot*18)/118);
	  $scgst=$gst/2;
	  
	  $total=$sub_tot+$gst;
	  ?>
      </tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><div align="right">SGST</div></td>
      <td><?php echo $scgst; ?>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><div align="right">CGST</div></td>
      <td><?php echo $scgst; ?>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td colspan="2">&nbsp;</td>
	    <td>&nbsp;</td>
	    <td colspan="2"><strong>Total Amount </strong></td>
	    <td><b><?php echo $total; ?></b></td>
	    <td>&nbsp;</td>
	    </tr>
	  <tr>
	  </div>
      <td colspan="2"><a href="billing_details_view.php" onClick="call()" class="btn btn-info">Back</a>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><div align="right"></div></td>
      <td>&nbsp;<input type="button" value="Print" class="btn btn-primary" onClick="PrintDiv();"></td>
      <td>&nbsp;</td>
      </tr>
	</tbody>
           
	  
<script>
function call()
{

}
</script>
	  
     </tbody>
                                    </table>
                                </div>
                            </div>
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