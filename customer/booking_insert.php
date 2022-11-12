<?php
include('db.php');

$car_id=$_POST['car_id'];
$booking_time=$_POST['booking_time'];
$booking_date=$_POST['booking_date'];


  $sql="insert into booking_details values(null,'$car_id','$booking_time','$booking_date','Pending')";
$conn->query($sql);
$b_id=mysqli_insert_id($conn);

foreach($_POST['service_id'] as $check) 
{
$sql2="insert into book_service values(null,'$check','$b_id')";
$conn->query($sql2);

}
?>
<script>
alert('Booking Requested..Status :Pending');
document.location="booking_view.php";
</script>