<?php
$customer_id=$_POST['customer_id'];
$car_make=$_POST['car_make'];
$car_model=$_POST['car_model'];
$car_regno=$_POST['car_regno'];
include('db.php');
$sql="insert into car_details values(null,'$customer_id','$car_make','$car_model','$car_regno')";
mysql_query($sql);
?>
<script>
alert('inserted....');
document.location="car_details_form.php";
</script>