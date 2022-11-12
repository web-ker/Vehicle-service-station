<?php

$customer_name=$_POST['customer_name'];
$customer_add=$_POST['customer_add'];
$customer_city=$_POST['customer_city'];
$customer_contact_no=$_POST['customer_contact_no'];
$customer_email=$_POST['customer_email'];
include('db.php');

$sql="insert into customer_details values(null,'$customer_name','$customer_add','$customer_city','$customer_contact_no','$customer_email')";
$conn->query($sql);

$sql="insert into  login_details values('$customer_email','$customer_contact_no','customer','Enter Your Contact No','$customer_contact_no','Active')";
$conn->query($sql);
?>
<script>
alert('inserted...');
document.location="customer_view.php";
</script>
