<?php

$employee_name=$_POST['employee_name'];
$employee_address=$_POST['employee_address'];
$employee_contactno=$_POST['employee_contactno'];
$employee_type=$_POST['employee_type'];
include('db.php');
$sql="insert into employee_details values(null,'$employee_name','$employee_address','$employee_contactno','$employee_type')";
mysql_query($sql);
?>
<script>
alert('inserted...');
document.location="employee_form.php";
</script>