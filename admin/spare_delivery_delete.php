<?php 
include('db.php');
$spare_delivery_id=$_REQUEST['spare_delivery_id'];
$jobcard_id=$_REQUEST['jobcard_id'];
$sql="delete from spare_delivery where spare_delivery_id='$spare_delivery_id'";
mysql_query($sql);
?>
<script>
alert("deleted..");
document.location="spare_delivery_view.php?jobcard_id=<?php echo $jobcard_id; ?>";
</script>