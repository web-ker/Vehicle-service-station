
<!doctype html>
<html class="no-js" lang="">

<?php include('metatag.php'); ?>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php include('sidebar.php'); ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
 <?php include('header.php'); ?>
            <!-- Mobile Menu start -->
           <?php include('mobile_menu.php'); ?>
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
               
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>JOBCARD DETAILS FORM</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         	   <div class="all-form-element-inner">
			<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>

<?php
include('db.php');
$jobcard_id=$_REQUEST['jobcard_id'];
$sql="select * from jobcard_details  where jobcard_id='$jobcard_id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res); 
?>
<form name="formID" id="formID" method="post" action="jobcard_details_update.php">
    <input type="hidden" name="jobcard_id" value="<?php echo $row['jobcard_id'];?>">
<div id="divToPrint">
  <table width="466" height="821" border="0" align="center">
   <tr>
                    <th colspan="6"><div align="center"><font size="+2">SRI RAMA AUTOMOTIVES</font><br>
                     <font size="+1"> All multibrand car service station<br>
                      Near BKT MIll, Bellary Road, Challekere<br>
                      Chitradurga Dist, Karnataka -577522 </font></div></th>
          </tr>
    <tr>
      <td width="157">Car Name</td>
      <td width="147"><select name="car_id" id="car_id" class=" form-control validate,[required]">
        <option value="">Select car</option>
        <?php
  include('db.php');
  $sql1="select * from car_details";
  $res1=$conn->query($sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
       <option value="<?php echo $row1['car_id'];?>"<?php if($row1['car_id']==$row['car_id']){ ?> selected <?php }?> ><?php echo $row1['car_make'];?></option>
        <?php
	}
	?>
      </select></td>
    </tr>
   
    <tr>
      <td>Date</td>
      <td><input name="jobcard_date" type="date" id="jobcard_date" class=" form-control validate,[required,custom[date]]" value="<?php echo $row['jobcard_date'];?>"></td>
    </tr>
   
   
    <tr>
      <td>Service Details</td>
      <td><?php
   $j_id=$row['jobcard_id'];
   $stot=0;
    $sql12="select * from service_details sd, job_done jd where sd.service_id=jd.service_id and jd.jobcard_id='$j_id'";
  $res12=$conn->query($sql12);
  while($row12=mysqli_fetch_array($res12))
  {
  $stot=$stot+$row12['service_charge'];
  ?>
  <li><?php echo $row12['service_name']; ?></li><br>
  <?php
  }
 // echo "<hr>";
   echo "<b>Service Charges ".$stot."<br>"; 
  ?></td>
    </tr>
    <tr>
      <td>Time</td>
      <td><input name="jobcard_time" type="time" id="jobcard_time" class=" form-control validate,[required]" value="<?php echo $row['jobcard_time'];?>"></td>
    </tr>
    <tr>
      <td>Year Of MFD </td>
      <td><input name="year_of_mfd"  type="number" min="1990" max="2099" step="1" vlaue="2019" id="year_of_mfd" class=" form-control validate,[required]" value="<?php echo $row['year_of_mfd'];?>"></td>
    </tr>
    <tr>
      <td>Fuel Type</td>
      <td><input name="fuel_type" type="text" id="fuel_type" class=" form-control validate,[required,custom[onlyLetter]]" value="<?php echo $row['fuel_type'];?>"></td>
    </tr>
    <tr>
      <td>Engine No</td>
      <td><input name="engine_no" type="text" id="engine_no" class=" form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['engine_no'];?>"></td>
    </tr>
    <tr>
      <td>Chassis No </td>
      <td><input name="chassis_no" type="text" id="chassis_no" class=" form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['chassis_no'];?>"></td>
    </tr>
    <tr>
      <td>Total Kms </td>
      <td><input name="total_kms" type="text" id="total_kms" class=" form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['total_kms'];?>"></td>
    </tr>
    <tr>
      <td>Date Estimate </td>
      <td><input name="date_estimate" type="date" id="date_estimate" class=" form-control validate,[required,custom[date]]" value="<?php echo $row['date_estimate'];?>"></td>
    </tr>
    <tr>
      <td>Time Estimate</td>
      <td><input name="time_estimate" type="time" id="time_estimate" class=" form-control validate,[required]" value="<?php echo $row['time_estimate'];?>"></td>
    </tr>
    <tr>
      <td>Other Charges</td>
      <td><input name="price_estimate" type="text" id="price_estimate" class=" form-control validate,[required,custom[onlyNumber]]" value="<?php echo $row['price_estimate'];?>"></td>
    </tr>
	<?php $estimate=$stot+$row['price_estimate']; ?>
	<tr>
      <td>TOTAL ESTIMATE </td>
      <td><input name="estimate" type="text" id="estimate" class=" form-control validate,[required,custom[onlyNumber]]" readonly="" value="<?php echo $estimate; ?>"></td>
    </tr>
	<tr>
      <td width="169">Employee</td>
      <td width="124"><select name="employee_id" id="employee_id" class=" form-control validate,[required]">
	  <option value="">Select a Employee</option>
	   <?php
  include('db.php');
  $sql2="select * from employee_details";
  $res2=$conn->query($sql2);
  while($row2=mysqli_fetch_array($res2))
  {
  ?>
	  <option value="<?php echo $row2['employee_id'];?>"<?php if($row2['employee_id']==$row['employee_id']){ ?> selected <?php }?> ><?php echo $row2['employee_name'];?> / <?php echo $row2['employee_contactno'];?> </option>
	<?php
	}
	?>
	  </select>
	  </td>
    </tr>

    </div>
    <tr>
      <td colspan="2">
	  &nbsp;	<input type="button" value="Print" class="btn btn-primary" onClick="PrintDiv();">
	  <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
	   <a href="jobcard_details_view.php" onClick="call()" class="btn btn-primary">Back</a>
<script>
function call()
{

}
</script></td>
	  
    </tr>
  </table>
</form>

  </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form End-->
<?php include('footer.php'); ?>
<?php include('val.php'); ?>
</body>

</html>