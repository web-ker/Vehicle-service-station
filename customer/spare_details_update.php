<?php 
include('db.php'); 
$item_id=$_POST['item_id'];
$item_name=$_POST['item_name'];
$item_code=$_POST['item_code'];
$item_description=$_POST['item_description'];
$s_item_qty=$_POST['s_item_qty'];
$item_reorder_qty=$_POST['item_reorder_qty'];
$item_price=$_POST['item_price'];
$sql="update  spare_details set item_name='$item_name',item_code='$item_code',item_description='$item_description',s_item_qty='$s_item_qty',item_reorder_qty='$item_reorder_qty',item_price='$item_price' where item_id='$item_id' ";
mysql_query($sql);
?>
<script>
alert("updated..");
document.location="spare_details_view.php";
</script>