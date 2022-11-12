<?php 
include('db.php'); 
$jobdone_id=$_POST['jobdone_id'];
$service_id=$_POST['service_id'];
$jobcard_id=$_POST['jobcard_id'];
$sql="update  job_done set service_id='$service_id',jobcard_id='$jobcard_id' where jobdone_id='$jobdone_id'";
mysql_query($sql);
?>
<script>
alert("updated..");
document.location="job_done_view.php";
</script>
	