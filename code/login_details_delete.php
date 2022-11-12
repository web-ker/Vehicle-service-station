<?php 
include('db.php');
$login_id=$_REQUEST['login_id'];
$sql="delete from login_details where login_id='$login_id'";
mysql_query($sql);
?>
<script>
alert("deleted..");
document.location="login_details_view.php";
</script>