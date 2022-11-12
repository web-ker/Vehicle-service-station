<?php
include('db.php');
$service_id=$_POST['service_id'];
$item_id=$_POST['item_id'];
$jobcard_id=$_POST['jobcard_id'];
$service_date=$_POST['service_date'];
$service_description=$_POST['service_description'];
$total_amt=$_POST['total_amt'];
$payment_status=$_POST['payment_status'];
$cgst=$_POST['cgst'];
$sgst=$_POST['sgst'];


$sql="insert into  billing_details values(null,'$service_id','$item_id','$jobcard_id','$service_date','$service_description','$total_amt','$payment_status','$cgst','$sgst')";
mysql_query($sql);
?>
<script>
alert('inserted...');
document.location="billing_details_form.php";
</script>