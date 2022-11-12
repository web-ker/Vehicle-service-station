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
        <h3><i class="fa fa-angle-right"></i> Advanced Form Components</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
<form name="form1" method="post" action="client_payment_insert.php">
  <table width="333" height="423" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Client Payment </div></td>
    </tr>
    <tr>
      <td><div align="center">Client ID </div></td>
      <td><div align="center">
        <select name="client_id" id="client_id" class="form-control">
		<option value="select">select</option>
		<?php
		include('db_connect.php');
		$sql="select * from client";
		$r=mysql_query($sql);
		while($row=mysql_fetch_array($r))
		{
		?>
		<option value="<?php echo $row['client_id'];?>"><?php echo $row['client_name'];?></option>
		<?php
		}
		?>
        </select>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Description</div></td>
      <td><div align="center">
        <textarea name="description" id="description" class="form-control"></textarea>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Payment Type </div></td>
      <td><div align="center">
        <select name="p_type" id="p_type" class="form-control">
          <option>select</option>
          <option>Development</option>
          <option>Renewal</option>
          <option>Hosting</option>
          <option>SMS</option>
          <option>Development/Hosting</option>
          <option>SEO</option>
          <option>Services</option>
          <option>Other</option>
        </select>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Payment Mode </div></td>
      <td><div align="center">
        <select name="p_mode" id="p_mode" class="form-control">
          <option>select</option>
          <option>Cash</option>
          <option>Check</option>
          <option>DD</option>
        </select>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Bank Name </div></td>
      <td><div align="center">
        <input name="bank_name" type="text" id="bank_name" class="form-control">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Chech/DD Number </div></td>
      <td><div align="center">
        <input name="check_dd" type="text" id="check_dd" class="form-control">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Amount</div></td>
      <td><div align="center">
        <input name="amount" type="text" id="amount" class="form-control">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Chech Date </div></td>
      <td><div align="center">
        <input name="check_date" type="date" id="check_date" class="form-control">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Payment Date </div></td>
      <td><div align="center">
        <input name="pay_date" type="date" id="pay_date" class="form-control">
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
      </div></td>
    </tr>
  </table>
</form>
</div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- DATE TIME PICKERS -->

        
          <!-- /col-lg-12 -->
        </div>
        <!-- row -->
      </section>
      <?php include('footer.php');?>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
<?php include('script.php');?>

</body>

</html>
