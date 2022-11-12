<?php
include('db.php');
$car_id=$_POST['car_id'];
$customer_id=$_POST['customer_id'];
$car_make=$_POST['car_make'];
$car_model=$_POST['car_model'];
$car_regno=$_POST['car_regno'];
$sql="update car_details set customer_id='$customer_id',car_make='$car_make',car_model='$car_model',car_regno='$car_regno'  where car_id='$car_id'";
$conn->query($sql);
?>
<script>
alert("updated..");
document.location="car_details_view.php";
</script>
