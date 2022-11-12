<?php
$employee_id=$_POST['employee_id'];
$employee_name=$_POST['employee_name'];
$employee_address=$_POST['employee_address'];
$employee_contactno=$_POST['employee_contactno'];
$employee_type=$_POST['employee_type'];
include('db.php');
$sql="update employee_details set employee_name='$employee_name',employee_address='$employee_address',employee_contactno='$employee_contactno',employee_type='$employee_type' where employee_id='$employee_id'";
mysql_query($sql);
?>
<script>
alert('updated...');
document.location="employee_view.php";
</script>