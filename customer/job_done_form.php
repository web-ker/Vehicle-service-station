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
        <h3><i class="fa fa-angle-right"></i> JOB DONE  </h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">

<form name="formID" id="formID" method="post" action="job_done_insert.php">
  <table width="270" border="0">
    <tr>
      <td height="31" colspan="2">Job Done </td>
    </tr>
    <tr>
      <td width="107">Service Id </td>
      <td width="147"><select name="service_id" id="service_id" class=" form-control validate,[required]">
	  <option value="">select service</option>
	  <?php
	  include('db.php');
	  $sql1="select * from  service_details";
	  $res1=mysql_query($sql1);
	  while($row1=mysql_fetch_array($res1))
	  {
	  ?>
	  <option value="<?php echo $row1['service_id'];?>"><?php echo $row1['service_name'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Jobcard Id </td>
      <td><select name="jobcard_id" id="jobcard_id" class="form-control validate,[required]">
	    <option value="">select jobcard_date</option>
	  <?php
	  include('db.php');
	   $sql2="select * from  jobcard_details";
	  $res2=mysql_query($sql2);
	  while($row2=mysql_fetch_array($res2))
	  {
	  ?>
	  <option value="<?php echo $row2['jobcard_id'];?>"><?php echo $row2['jobcard_date'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"  class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset"  class="btn btn-danger btn"></td>
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
<?php
include('val.php');
?>

</body>

</html>
