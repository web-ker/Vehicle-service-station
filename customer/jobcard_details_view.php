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
        <h3><i class="fa fa-angle-right"></i>jobcard Details View</h3>
        
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
      <th><a>Jobcard Id</a></td>
      <th><a>Car Id</a></th>
      <th><a>Customer Id</a></th>
      <th><a>Service Id </a></th>
      <th><a>Jobcard Date </a></th>
      <th><a>Jobcard Time</a></th>
      <th><a>Year of MFD </a></th>
      <th><a>Fuel Type </a> </th>
      <th><a>Engine No</a> </th>
      <th><a>Chassis No</a> </th>
      <th><a>Total Kms</a></th>
      <th><a>Date Estimate </a></th>
      <th><a>Time Estimate </a></th>
      <th><a>Price Estimate</a></th>
      <th><a>Employee Id </a></th>
      <th><a>Edit</a></th>
      <th><a>Delete</a></th>
    </tr>
	</thead>
	<tbody>

	<?php 
	include('db.php');
	$sql="select * from jobcard_details jd, car_details cd,customer_details cud,service_details sd where jd.car_id=cd.car_id and jd.customer_id=cud.customer_id and jd.service_id=sd.service_id";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $row['jobcard_id'];?></td>
      <td>&nbsp;<?php echo $row['car_id'];?></td>
      <td>&nbsp;<?php echo $row['customer_id'];?></td>
      <td>&nbsp;<?php echo $row['service_id'];?></td>
      <td>&nbsp;<?php echo $row['jobcard_date'];?></td>
      <td>&nbsp;<?php echo $row['jobcard_time'];?></td>
      <td>&nbsp;<?php echo $row['year_of_mfd'];?></td>
      <td>&nbsp;<?php echo $row['fuel_type'];?></td>
      <td>&nbsp;<?php echo $row['engine_no'];?></td>
      <td>&nbsp;<?php echo $row['chassis_no'];?></td>
      <td>&nbsp;<?php echo $row['total_kms'];?></td>
      <td>&nbsp;<?php echo $row['date_estimate'];?></td>
      <td>&nbsp;<?php echo $row['time_estimate'];?></td>
      <td>&nbsp;<?php echo $row['price_estimate'];?></td>
      <td>&nbsp;<?php echo $row['employee_id'];?></td>
      <td>&nbsp;<a href="jobcard_details_edit.php?jobcard_id=<?php echo $row['jobcard_id'];?>"><img src="../IMAGES/edit.png"width="30" height="30"</a></a></td>
      <td>&nbsp;<a href="jobcard_details_delete.php?jobcard_id=<?php echo $row['jobcard_id'];?>"onclick="return confirm('do you want to delete?')"><img src="../IMAGES/delete.png"width="30" height="30"</a></a></td>
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
