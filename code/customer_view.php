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
        <h3><i class="fa fa-angle-right"></i>Cutomer Details View</h3>
        
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
    <th><a>id</a></th>
    <th><a>Custmoer name</a> </th>
    <th><a>address</a></th>
    <th><a>city</a></th>
    <th><a>Contact no</a> </th>
    <th><a>Email</a></th>
    <th><a>Edit</a></th>
    <th><a>Delete</a></th>
  </tr>
  <?php
  include('db.php');
  $sql="select * from customer_details";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['customer_id'];?></td>
    <td>&nbsp;<?php echo $row['customer_name'];?></td>
    <td>&nbsp;<?php echo $row['customer_add'];?></td>
    <td>&nbsp;<?php echo $row['customer_city'];?></td>
    <td>&nbsp;<?php echo $row['customer_contact_no'];?></td>
    <td>&nbsp;<?php echo $row['customer_email'];?></td>
    <td>&nbsp;<a href="customer_edit.php?customer_id=<?php echo $row['customer_id'];?>">edit</a></td>
    <td>&nbsp;<a href="customer_delete.php?c_id=<?php echo $row['customer_id'];?>">delete</a></td>
  </tr>
  </thead>
	<tbody>
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
