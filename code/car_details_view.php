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
        <h3><i class="fa fa-angle-right"></i>Car Details View</h3>
        
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
      <th><a>S.No</a></th>
      <th><a> Customer</a></th>
      <th><a>Make</a></th>
      <th><a> Model</a></th>
      <th><a>Car Regno</a></th>
      <th><a>Edit </a></th>
      <th><a>Delete</a></th>
    </tr>
	</thead>
	<tbody>
	<?php 
	include('db.php');
	$sql="select * from car_details cd,customer_details cud where cd.customer_id=cud.customer_id";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $row['car_id'];?></td>
      <td>&nbsp;<?php echo $row['customer_id'];?></td>
      <td>&nbsp;<?php echo $row['car_make'];?></td>
      <td>&nbsp;<?php echo $row['car_model'];?></td>
      <td>&nbsp;<?php echo $row['car_regno'];?></td>
	  <td>&nbsp;<a href="car_details_edit.php?car_id=<?php echo $row['car_id'];?>">edit</a></td>
      <td>&nbsp;<a href="car_details_delete.php?car_id=<?php echo $row['car_id'];?>">delete</a></td>
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
