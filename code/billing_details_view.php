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
        <h3><i class="fa fa-angle-right"></i>Biling Details View</h3>
        
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
      <th><a>Bill Id </a></th>
      <th><a>Service Id </a></th>
      <th><a>Item Id </a></td>
      <th><a>Jobcard Id </a></th>
      <th><a>Service Date</a> </th>
      <th><a>Service Description</a> </th>
      <th><a>Total Amount</a></th>
      <th><a>Payment Status </a></th>
      <th><a>CGST</a></th>
      <th><a>SGST</a></th>
      <th><a>Edit</a> </th>
      <th><a>Delete</a></th>
    </tr>
	</thead>
	<tbody>
	<?php
  include('db.php');
  $sql="select * from billing_details bd,service_details sd,spare_details sp,jobcard_details jd where bd.service_id=sd.service_id and bd.item_id=sp.item_id and bd.jobcard_id=jd.jobcard_id ";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
    <tr>
      <td>&nbsp;<?php echo $row['bill_id'];?></td>
      <td>&nbsp;<?php echo $row['service_id'];?></td>
      <td>&nbsp;<?php echo $row['item_id'];?></td>
      <td>&nbsp;<?php echo $row['jobcard_id'];?></td>
      <td>&nbsp;<?php echo $row['service_date'];?></td>
      <td>&nbsp;<?php echo $row['service_description'];?></td>
      <td>&nbsp;<?php echo $row['total_amt'];?></td>
      <td>&nbsp;<?php echo $row['payment_status'];?></td>
      <td>&nbsp;<?php echo $row['cgst'];?></td>
      <td>&nbsp;<?php echo $row['sgst'];?></td>
      <td>&nbsp;<a href="billing_details_edit.php?b_id=<?php echo $row['bill_id'];?>">edit</a></td>
      <td>&nbsp;<a href="billing_details_delete.php?b_id=<?php echo $row['bill_id'];?>">delete</a></td>
    </tr>
	<?php 
	}
	?>
	</tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
   <?php include('footer.php');?>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
<?php include('script.php');?>
</body>

</html>
