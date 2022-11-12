<?php
include('db.php'); 
$customer_id=$_POST['customer_id'];
$customer_name=$_POST['customer_name'];
$customer_add=$_POST['customer_add'];
$customer_city=$_POST['customer_city'];
$customer_contact_no=$_POST['customer_contact_no'];
$customer_email=$_POST['customer_email'];
$sql="update  customer_details set customer_name='$customer_name',customer_add='$customer_add',customer_city='$customer_city',customer_contact_no='$customer_contact_no',customer_email='$customer_email'where customer_id='$customer_id' ";
mysql_query($sql);
?>
<script>
alert("updated..");
document.location="customer_view.php";
</script>
