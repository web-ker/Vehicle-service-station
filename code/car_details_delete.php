<?php
include('db.php');
$car_id=$_REQUEST['car_id'];
$sql="delete  from car_details where car_id='$car_id' ";
mysql_query($sql); 
?>
<script>
alert('deleted');
document.location="car_details_view.php";
</script>
