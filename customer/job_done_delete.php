<?php 
include('db.php');
$jobdone_id=$_REQUEST['jobdone_id'];
$sql="delete from job_done where jobdone_id='$jobdone_id'";
mysql_query($sql);
?>
<script>
alert("deleted..");
document.location="job_done_view.php";
</script>