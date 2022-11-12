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
        <h3><i class="fa fa-angle-right"></i>Spare Delivery View</h3>
        
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
      <th><a>Spare Delivey Id</a></th>
      <th><a>Jobcard Id </a></th>
      <th><a>Item Id </a></th>
      <th><a>Item Qty</a></th>
      <th><a>Date</a></th>
      <th><a>Edit</a></th>
      <th><a>Delete</a></th>
    </tr>
		</thead>
	<tbody>
	<?php 
	include('db.php');
	$sql="select * from spare_delivery sdd,jobcard_details jd, spare_details sp where sdd.jobcard_id=jd.jobcard_id and sdd.item_id=sp.item_id ";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $row['spare_delivery_id'];?></td>
      <td>&nbsp;<?php echo $row['jobcard_id'];?></td>
      <td>&nbsp;<?php echo $row['item_id'];?></td>
      <td>&nbsp;<?php echo $row['d_item_qty'];?></td>
      <td>&nbsp;<?php echo $row['date'];?></td>
      <td>&nbsp;<a href="spare_delivery_edit.php?spare_delivery_id=<?php echo $row['spare_delivery_id'];?>"><img src="../IMAGES/edit.png"width="30" height="30"</a></a></td>
      <td>&nbsp;<a href="spare_delivery_delete.php?spare_delivery_id=<?php echo $row['spare_delivery_id'];?>"onclick="return confirm('do you want to delete?')"><img src="../IMAGES/delete.png"width="30" height="30"</a></a></td>
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
