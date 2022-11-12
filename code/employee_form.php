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
        <h3><i class="fa fa-angle-right"></i> EMPLOYEE DETAILS </h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
<body>

<form name="formID" id="formID" method="post" action="employee_insert.php">
  <table width="200" border="0">
    <tr>
      <td colspan="2">Employee Details </td>
    </tr>
    <tr>
      <td>Name </td>
      <td><input name="employee_name" type="text" id="employee_name" class=" form-control validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input name="employee_address" type="text" id="employee_address" class=" form-control validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Contactno</td>
      <td><input name="employee_contactno" type="text" id="employee_contactno" class=" form-control validate,[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Type</td>
      <td><input name="employee_type" type="text" id="employee_type" class=" form-control validate,[required,custom[onlyLetter]]"></td>
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
