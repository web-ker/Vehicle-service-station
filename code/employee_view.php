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
        <h3><i class="fa fa-angle-right"></i>Emplyoee Details View</h3>
        
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
      <th><a>Employee Id</a></th>
      <th><a>Employee Name </a></th>
      <th><a>Employee Address </a></th>
      <th><a>Employee Contactno</a></th>
      <th><a>Employee Type</a></th>
      <th><a>Edi</a>t</a></th>
      <th><a>Delete</th>
    </tr>
	</thead>
	<tbody>
	<?php 
	include('db.php');
	$sql="select * from employee_details";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
	
    <tr>
      <td>&nbsp;<?php echo $row['employee_id'];?></td>
      <td>&nbsp;<?php echo $row['employee_name'];?></td>
      <td>&nbsp;<?php echo $row['employee_address'];?></td>
      <td>&nbsp;<?php echo $row['employee_contactno'];?></td>
      <td>&nbsp;<?php echo $row['employee_type'];?></td>
      <td>&nbsp;<a href="employee_edit.php?employee_id=<?php echo $row['employee_id'];?>">edit</a></td>
      <td>&nbsp;<a href="employee_delete.php?employee_id=<?php echo $row['employee_id'];?>">delete</a></td>
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
