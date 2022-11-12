<?php
$jobcard_id=$_POST['jobcard_id'];
$item_id=$_POST['item_id'];
$d_item_qty=$_POST['d_item_qty'];
$date=$_POST['date'];
include('db.php');
$sql="insert into spare_delivery values(null,'$jobcard_id','$item_id','$d_item_qty','$date')";
mysql_query($sql);
?>
<script>
alert('inserteed...');
document.location="spare_delivery_form.php";
</script>