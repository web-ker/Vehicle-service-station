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
        <h3><i class="fa fa-angle-right"></i>Spare Details View</h3>
        
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
      <th width="78"><a>Item Id</a> </th>
      <th width="95"><a>Item Name</a> </th>
      <th width="82"><a>Item Code</a></th>
      <th width="126"><a>Item Description</a></th>
      <th width="120"><a>s_item_qty</a> </th>
      <th width="87"><a>Item Reorder Qty</a></th>
      <th width="85"><a>Item Price</a></th>
      <th width="59"><a>Edit </a></th>
      <th width="122"><a>Delete</a></th>
    </tr>
		</thead>
	<tbody>
	<?php 
	include('db.php');
	$sql="select * from Spare_details";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $row['item_id'];?></td>
      <td>&nbsp;<?php echo $row['item_name'];?></td>
      <td>&nbsp;<?php echo $row['item_code'];?></td>
      <td>&nbsp;<?php echo $row['item_description'];?></td>
      <td>&nbsp;<?php echo $row['s_item_qty'];?></td>
      <td>&nbsp;<?php echo $row['item_reorder_qty'];?></td>
      <td>&nbsp;<?php echo $row['item_price'];?></td>
      <td>&nbsp;<a href="spare_details_edit.php?item_id=<?php echo $row['item_id'];?>">edit</a></td>
      <td>&nbsp;<a href="spare_details_delete.php?item_id=<?php echo $row['item_id'];?>">delete</a></td>
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
