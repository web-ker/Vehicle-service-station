<?php
include('db.php');
$jobcard_id=$_REQUEST['jobcard_id'];
$service_amount=$_REQUEST['service_amount'];
$spare_amount=$_REQUEST['spare_amount'];


$total_amt=$service_amount+$spare_amount;
//$payment_status=$_POST['payment_status'];
$gst=18;
$bill_date=date('Y-m-d');


 $sql="insert into  billing_details values(null,'$jobcard_id','$service_amount','$spare_amount','$total_amt','Paid','$gst','$bill_date')";
$conn->query($sql);

 $sql2="update   jobcard_details set jobcard_status='Service Done' where jobcard_id='$jobcard_id' ";
$conn->query($sql2);
?>
<script>
alert('Bill Generated Successfully...');
document.location="billing_details_view.php";
</script>