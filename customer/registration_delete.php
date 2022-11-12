<?php 
include('db.php');
$registration_id=$_REQUEST['registration_id'];
$sql="delete from registration where registration_id='$registration_id'";
mysql_query($sql);
?>
<script>
alert("deleted..");
document.location="registration_view.php";
</script>