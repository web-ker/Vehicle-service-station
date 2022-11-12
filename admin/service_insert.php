<?php
$service_name=$_POST['service_name'];
$service_type=$_POST['service_type'];
$service_charge=$_POST['service_charge'];
$service_description=$_POST['service_description'];
include('db.php');
 $sql="insert into service_details values(null,'$service_name','$service_type','$service_charge','$service_description')";
$conn->query($sql);
 
?>
<script>
alert('inserted...');
document.location="service_view.php";
</script>