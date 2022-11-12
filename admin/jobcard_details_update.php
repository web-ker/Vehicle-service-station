<?php 
include('db.php'); 
$jobcard_id=$_POST['jobcard_id'];
$car_id=$_POST['car_id'];

$service_id=$_POST['service_id'];
$jobcard_date=$_POST['jobcard_date'];
$jobcard_time=$_POST['jobcard_time'];
$year_of_mfd=$_POST['year_of_mfd'];
$fuel_type=$_POST['fuel_type'];
$engine_no=$_POST['engine_no'];
$chassis_no=$_POST['chassis_no'];
$total_kms=$_POST['total_kms'];
$date_estimate=$_POST['date_estimate'];
$time_estimate=$_POST['time_estimate'];
$price_estimate=$_POST['price_estimate'];
$employee_id=$_POST['employee_id'];
$sql="update jobcard_details set car_id='$car_id',jobcard_date='$jobcard_date',jobcard_time='$jobcard_time',year_of_mfd='$year_of_mfd',fuel_type='$fuel_type',engine_no='$engine_no',chassis_no='$chassis_no',total_kms='$total_kms',date_estimate='$date_estimate',time_estimate='$time_estimate',price_estimate='$price_estimate',employee_id='$employee_id' where jobcard_id='$jobcard_id'";
$conn->query($sql);
?>
<script>
alert("updated..");
document.location="jobcard_details_view.php";
</script>