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
        <h3><i class="fa fa-angle-right"></i>Service Details View</h3>
        
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
      <th><a>Service Id</a> </th>
      <th><a>Service Name</a></th>
      <th><a>Service Type</a> </th>
      <th><a>Service Charge</a></th>
      <th><a>Service Description </a></th>
      <th><a>Edit</a> </th>
      <th><a>Delete</a></th>
    </tr>
		</thead>
	<tbody>
	<?php 
	include('db.php');
	$sql="select * from service_details";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
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
