<?php

$customer_name=$_POST['customer_name'];
$customer_add=$_POST['customer_add'];
$customer_city=$_POST['customer_city'];
$customer_contact_no=$_POST['customer_contact_no'];
$customer_email=$_POST['customer_email'];
include('db.php');

$sql="insert into customer_details values(null,'$customer_name','$customer_add','$customer_city','$customer_contact_no','$customer_email')";
mysql_query($sql);
?>
<script>
alert('inserted...');
document.location="customer_form.php";
</script>
