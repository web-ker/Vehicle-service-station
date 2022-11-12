<?php 
include('db.php');
$jobcard_id=$_REQUEST['jobcard_id'];
$sql="delete from jobcard_details where jobcard_id='$jobcard_id'";
mysql_query($sql);
?>
<script>
alert("deleted..");
document.location="jobcard_details_view.php";
</script>