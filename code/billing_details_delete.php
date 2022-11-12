<?php 
include('db.php');
$b_id=$_REQUEST['b_id'];
$sql="delete from billing_details where bill_id='$b_id'";
mysql_query($sql);
?>
<script>
alert("deleted..");
document.location="billing_details_view.php";
</script>