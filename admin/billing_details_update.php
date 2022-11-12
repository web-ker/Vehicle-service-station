<?php
include('db.php');
$billing_id=$_POST['b_id'];
$jobcard_id=$_POST['jobcard_id'];
$service_amount=$_POST['service_amount'];
$spare_amount=$_POST['spare_amount'];
$total_amt=$_POST['total_amt'];
$payment_status=$_POST['payment_status'];
$gst=$_POST['gst'];
$bill_date=$_POST['bill_date'];
$sql="update  billing_details set jobcard_id='$jobcard_id',service_amount='$service_amount',spare_amount='$spare_amount',total_amt='$total_amt',payment_status='$payment_status',gst='$gst',bill_date='$bill_date' where bill_id='$billing_id' ";
mysql_query($sql);
?>
<script>
alert("updated..");
document.location="billing_details_view.php";
</script>