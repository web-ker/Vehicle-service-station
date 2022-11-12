<?php 
$customer_name=$_POST['customer_name'];
$customer_add=$_POST['customer_add'];
$customer_city=$_POST['customer_city'];
$customer_contact_no=$_POST['customer_contact_no'];
$customer_email=$_POST['customer_email'];
$hintq=$_POST['hintq'];
$hinta=$_POST['hinta'];
$password=$_POST['password'];

include('db.php');

  $sql="select * from customer_details where customer_email='$customer_email'";
  $res=mysql_query($sql);
  if($row=mysql_fetch_array($res))
  {
  ?>
<script>
alert("Email ID Already Registered..");
history.back();
</script>
<?php
  }
  else
  {


$sql="insert into customer_details values(null,'$customer_name','$customer_add','$customer_city','$customer_contact_no','$customer_email')";
mysql_query($sql);



$sql1="insert into login_details values('$customer_email','$password','customer','$hintq','$hinta','active' )";
mysql_query($sql1);
?>
<script>
alert(" Succesfully Registered...\n Username :- <?php echo $customer_email; ?> \n Password :- <?php echo $password; ?>");
document.location="login.php";
</script>
<?php
}
?>