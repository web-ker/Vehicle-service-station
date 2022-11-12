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
        <h3><i class="fa fa-angle-right"></i> Advanced Table Example</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
    <td>Id</td>
    <td>Client Id </td>
    <td>Description</td>
    <td>Payment Type</td>
    <td>Payment Mode</td>
    <td>Bank Name</td>
    <td>Chech/DD Number</td>
    <td>Amount</td>
    <td>Chech Date</td>
    <td>Payment Datele</td>
    <td>Edit</td>
    <td>delete</td>
  </tr
  </thead>
  <tbody>
  <?php
  include('db_connect.php');
  $sql="select * from client_payment cp, client c where cp.client_id=c.client_id " ;
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['client_pay_id']; ?></td>
    <td>&nbsp;<?php echo $row['client_name'];?></td>
    <td>&nbsp;<?php echo $row['description'];?></td>
    <td>&nbsp;<?php echo $row['payment_type'];?></td>
    <td>&nbsp;<?php echo $row['payment_mood'];?></td>
    <td>&nbsp;<?php echo $row['bank_name'];?></td>
    <td>&nbsp;<?php echo $row['chack_dd_number'];?></td>
    <td>&nbsp;<?php echo $row['amount'];?></td>
    <td>&nbsp;<?php echo $row['check_date'];?></td>
    <td>&nbsp;<?php echo $row['payment_date'];?></td>
    <td>&nbsp; <a href="client_payment_edit.php?client_pay_id=<?php echo $row['client_pay_id'];?>">edit</a></td>
    <td>&nbsp; <a href="client_payment_delete.php?client_pay_id=<?php echo $row['client_pay_id']; ?>">delete</a></td>
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
