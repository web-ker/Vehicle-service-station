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
		<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
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
							<!--  <a href="spare_details_form.php" class="btn btn-success btn">Add New</a> -->
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                     <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                  <tr>
                    <th colspan="3">GSTIN : 2 9ACEFS6641P2ZU </th>
                    <th colspan="3"><div align="right">Narendra V : 9880500609 </div></th>
                  </tr>
                  <tr>
                    <th colspan="6"><div align="center"><font size="+4">SRI RAMA AUTOMOTIVES</font><br>
                     <font size="+1"> All multibrand car service station<br>
                      Near BKT MIll, Bellary Road, Challakere<br>
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
      <th colspan="2"><a>Bill Id : </a><?php echo $row['bill_id'];?></th>
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
      <td colspan="2"><div align="right">SGST @ 9 % </div></td>
      <td><?php echo $scgst; ?>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><div align="right">CGST @ 9% </div></td>
      <td><?php echo $scgst; ?>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
	  <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><div align="right"><strong>Total Amount </strong></div></td>
      <td><b><?php echo $total; ?></b>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>

     
	  <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><input type="button" value="Print" class="btn btn-info" onClick="PrintDiv();"></td>
      <td> <a href="billing_details_view.php" onClick="call()" class="btn btn-primary">Back</a></td>
      <td>&nbsp;</td>
      </tr>
	  
	 
<script>
function call()
{

}
</script>
  </tbody>
                                    </table>
                                </div></div>
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