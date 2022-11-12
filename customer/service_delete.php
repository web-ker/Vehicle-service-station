<?php 
include('db.php');
$service_id=$_REQUEST['service_id'];
$sql="delete from service_details where service_id='$service_id'";
mysql_query($sql);
?>
<script>
alert("deleted..");
document.location="service_view.php";
</script>