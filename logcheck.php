<?php session_start();?>
<?php


$username=$_POST['username'];
$password=$_POST['password'];

include('db.php');
$sql="select * from login_details where username='$username' and password='$password'";
$res=mysql_query($sql);
if($row=mysql_fetch_array($res))
{
$type=$row['type'];
$_SESSION['uname']=$username;

if($type=="admin")
{
header('location:admin/home.php');
}
else if($type=="customer")
{
header('location:customer/home.php');
}

}
else
{
?>
<script>
alert("Invalid Username Or Password");
history.back();
</script>
<?php
}

?>

