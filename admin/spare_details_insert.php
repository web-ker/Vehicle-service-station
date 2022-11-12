<?php 
include('db.php'); 

$item_name=$_POST['item_name'];
$item_code=$_POST['item_code'];
$item_description=$_POST['item_description'];
$s_item_qty=$_POST['s_item_qty'];
$item_reorder_qty=$_POST['item_reorder_qty'];
$item_price=$_POST['item_price'];
$sql="insert into spare_details values(null,'$item_name','$item_code','$item_description','$s_item_qty','$item_reorder_qty','$item_price')";
$conn->query($sql);
?>
<script>
alert('inserted...');
document.location="spare_details_view.php";
</script>