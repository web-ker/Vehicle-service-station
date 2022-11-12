<?php 
include('db.php');
$booking_id=$_REQUEST['booking_id'];
$sql="update booking_details set status='Not Confirmed' where booking_id='$booking_id'";
$conn->query($sql);
?>
<script>
alert("Ur Bokking Is Not Confirmed..");
document.location="booking_view.php";
</script>