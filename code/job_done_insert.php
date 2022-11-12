<?php 
$service_id=$_POST['service_id'];
$jobcard_id=$_POST['jobcard_id'];
include('db.php');
$sql="insert into job_done values(null,'$service_id','$jobcard_id')";
mysql_query($sql);
?>
<script>
alert('inserted...');
document.location="job_done_form.php";
</script>