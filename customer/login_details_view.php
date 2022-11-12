<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("metatags.php"); ?>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
   <?php include("header.php"); ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
<?php include("sidebar.php"); ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <!------->
<p>Login Details</p>
<form name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Login Id </td>
      <td>Username</td>
      <td>password</td>
      <td>Type</td>
      <td>Hint Question</td>
      <td>Hint Answer </td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>
	<?php 
	include('db.php');
	$sql="select * from login_details";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $row['login_id'];?></td>
      <td>&nbsp;<?php echo $row['username'];?></td>
      <td>&nbsp;<?php echo $row['password'];?></td>
      <td>&nbsp;<?php echo $row['type'];?></td>
      <td>&nbsp;<?php echo $row['hintq'];?></td>
      <td>&nbsp;<?php echo $row['hinta'];?></td>
      <td>&nbsp;<a href="Login_details_edit.php?login_id=<?php echo $row['login_id'];?>">edit</a></td>
      <td>&nbsp;<a href="Login_details_delete.php?login_id=<?php echo $row['login_id'];?>">delete</a></td>
    </tr>
	<?php 
	}
	?>
  </table>
</form>
<p>&nbsp; </p>