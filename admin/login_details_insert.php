<?php

$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];
$hintq=$_POST['hintq'];
$hinta=$_POST['hinta'];
include('db.php');
$sql="insert into login_details values(null,'$username','$password','$type','$hintq','$hinta')";
mysql_query($sql);
 
?>
<script>
alert('inserted...');
document.location="login_details_form.php";
</script>