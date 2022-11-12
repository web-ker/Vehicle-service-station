<?php
include('db.php');
$employee_id=$_REQUEST['employee_id'];
$sql="delete from employee_details where employee_id='$employee_id' ";
$conn->query($sql);
?>
<script>
alert('deleted');
document.location="employee_view.php";
</script>