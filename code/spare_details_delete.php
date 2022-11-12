<?php 
include('db.php');
$item_id=$_REQUEST['item_id'];
$sql="delete from spare_details where item_id='$item_id'";
mysql_query($sql);
?>
<script>
alert("deleted..");
document.location="spare_details_view.php";
</script>