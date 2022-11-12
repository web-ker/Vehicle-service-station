<?php
$car_id=$_POST['car_id'];

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
include('db.php');
$sql="insert into jobcard_details values(null,'$car_id','$jobcard_date','$jobcard_time','$year_of_mfd','$fuel_type','$engine_no','$chassis_no','$total_kms','$date_estimate','$time_estimate','$price_estimate','$employee_id','Service Pending')";
$conn->query($sql);
$j_id=mysqli_insert_id($conn);

$booking_id=$_POST['booking_id'];

 $sql2="update booking_details set status='On Service' where booking_id='$booking_id'";
$conn->query($sql2);





foreach($_POST['service_id'] as $check) 
{

$sql2="insert into job_done values(null,'$check','$j_id')";
$conn->query($sql2);


}




?>
<script>
alert('inserted..');
document.location="jobcard_details_view.php";
</script>