<?php 
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$dob=$_POST['dob'];
$mobile_no=$_POST['mobile_no'];
$city=$_POST['city'];
$state=$_POST['state'];
$email_id=$_POST['email_id'];
$hintq=$_POST['hintq'];
$hinta=$_POST['hinta'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
include('db.php');
$sql="insert into registration values(null,'$first_name','$last_name','$dob','$mobile_no','$city','$state','$email_id','$hintq','$hinta','$password','$confirm_password')";
mysql_query($sql);
?>
<script>
alert('inserted...');
document.location="registration_form.php";
</script>