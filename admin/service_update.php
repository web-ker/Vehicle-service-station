<?php 
include('db.php'); 
$service_id=$_POST['service_id'];
$service_name=$_POST['service_name'];
$service_type=$_POST['service_type'];
$service_charge=$_POST['service_charge'];
$service_description=$_POST['service_description'];
$sql="update  service_details set  service_name='$service_name',service_type='$service_type',service_charge='$service_charge',service_description='$service_description' where service_id='$service_id' ";
$conn->query($sql);
?>
<script>
alert("updated..");
document.location="service_view.php";
</script>