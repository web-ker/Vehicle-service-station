<?php 
include('db.php'); 
$spare_delivery_id=$_POST['spare_delivery_id'];
$jobcard_id=$_POST['jobcard_id'];
$item_id=$_POST['item_id'];
$d_item_qty=$_POST['d_item_qty'];
$date=$_POST['date'];
 $sql="update  spare_delivery set jobcard_id='$jobcard_id',item_id='$item_id',d_item_qty='$d_item_qty',date='$date' where spare_delivery_id='$spare_delivery_id'";
mysql_query($sql);
?>
<script>
alert("updated..");
document.location="spare_delivery_view.php";
</script>