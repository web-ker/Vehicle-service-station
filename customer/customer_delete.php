<?php
include('db.php');
$c_id=$_REQUEST['c_id'];
$sql="delete from customer_details where customer_id='$c_id' ";
mysql_query($sql);
?>
<script>
alert("deleted..");
document.location="customer_view.php";
</script>