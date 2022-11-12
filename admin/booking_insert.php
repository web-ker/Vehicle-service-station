<?php
include('db.php');
$customer_id=$_POST['customer_id'];
$service_id=$_POST['service_id'];
$car_id=$_POST['car_id'];
$booking_time=$_POST['booking_time'];
$booking_date=$_POST['booking_date'];
$status=$_POST['status'];
$sql="insert into booking_details values(null,'$customer_id','$service_id','$car_id','$booking_time','$booking_date','$status')";
mysql_query($sql);
?>
<script>
alert('inserted...');
document.location="booking_details.php";
</script>