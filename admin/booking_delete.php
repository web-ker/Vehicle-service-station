<?php 
include('db.php');
$booking_id=$_REQUEST['booking_id'];
$sql="delete from booking_details where booking_id='$booking_id'";
$conn->query($sql);
?>
<script>
alert("deleted..");
document.location="booking_view.php";
</script>