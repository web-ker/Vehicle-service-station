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
        <h3><i class="fa fa-angle-right"></i>Job Done Details View</h3>
        
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
      <th><a>Jobdone Id </a></th>
      <th><a>Service Id </a></th>
      <th><a>Jobcard Id</a></th>
      <th><a>Edit</a></th>
      <th><a>Delete</a></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('db.php');
	$sql="select * from job_done jdd,service_details sd,jobcard_details jd where jdd.service_id=sd.service_id and jdd.jobcard_id=jd.jobcard_id";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{ 
	?>
    <tr>
      <td>&nbsp;<?php echo $row['jobdone_id'];?></td>
      <td>&nbsp;<?php echo $row['service_id'];?></td>
      <td>&nbsp;<?php echo $row['jobcard_id'];?></td>
      <td>&nbsp;<a href="job_done_edit.php?jobdone_id=<?php echo $row['jobdone_id'];?>">edit</a></td>
      <td>&nbsp;<a href="job_done_delete.php?jobdone_id=<?php echo $row['jobdone_id'];?>">delete</a></td>
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
