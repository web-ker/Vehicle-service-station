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
        <h3><i class="fa fa-angle-right"></i> SERVICE DETAILS </h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">

<form name="formID" id="formID" method="post" action="service_insert.php">
  <table width="304" border="0">
    <tr>
      <td colspan="2">Service Details</td>
    </tr>
    <tr>
      <td width="167">Name</td>
      <td width="121"><input name="service_name" type="text" id="service_name" class=" form-control validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Type</td>
      <td><input name="service_type" type="text" id="service_type" class=" form-control validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Charge</td>
      <td><input name="service_charge" type="text" id="service_charge" class=" form-control validate,[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input name="service_description" type="text" id="service_description" class=" form-control validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"  class="btn btn-success btn">
          <input type="reset" name="Reset" value="Reset"  class="btn btn-danger btn"></td>
    </tr>
  </table>
  <input type="text" name="textfield">
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
