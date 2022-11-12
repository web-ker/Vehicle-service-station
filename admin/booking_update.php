<?php
include('db.php');
$booking_id=$_POST['$booking_id'];
$customer_id=$_POST['customer_id'];
$service_id=$_POST['service_id'];
$car_id=$_POST['car_id'];
$booking_time=$_POST['booking_time'];
$booking_date=$_POST['booking_date'];
$status=$_POST['status'];
$sql="update  booking_details set customer_id='$customer_id',service_id='$service_id',car_id='$car_id',booking_time='$booking_time',booking_date='$booking_date',status='$status' where booking_id='$booking_id'";
mysql_query($sql);
?>
<script>
alert("updated..");
document.location="booking_view.php";
</script>