<?php 
include('db.php');
$spare_delivery_id=$_REQUEST['spare_delivery_id'];
$sql="delete from spare_delivery where spare_delivery_id='$spare_delivery_id'";
mysql_query($sql);
?>
<script>
alert("deleted..");
document.location="spare_delivery_view.php";
</script>