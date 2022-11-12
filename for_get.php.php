<?php
include('db.php');
$username=$_POST["username"];
$sql="select * from login_details where username='$username'";
//echo $sql;
$res=mysql_query($sql);
if($row=mysql_fetch_array($res))
{
    $hintqtn=$row["hintq"];
	$hintans=$row["hinta"];
	$pwd=$row["password"];
?>
<!DOCTYPE html>
<html>
<head>
<title>Dark Login Form Flat Responsive widget Template :: w3layouts</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dark Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, SonyErricsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
</head>
<body>
<div class="container">
<h1> Hint Question ? <br><p style="font-size:35px; color:red;">-->> &nbsp;&nbsp;&nbsp;<?php echo " ".$hintqtn; ?></p></h1>
     <div class="contact-form">
	 <div class="signin">

	 
	 
     <form method="post" action="getpwd.php">
	      <p>Enter a Answer</p>
	      <input type="text" class="user" name="type_ans"  placeholder=""  />
		  <input name="hintans" type="hidden" id="hintans" value="<?php echo $hintans; ?>">
                              <input name="pwd" type="hidden" id="pwd" value="<?php echo $pwd; ?>">
					<div align="center">
          <input type="submit" value="Login" />
		  </div>
		  
	 </form>
	 </div>
	 </div>	 
</div>
<div class="footer">
     <p>2018-2019 Copyright &copy All Rights Reserved | Design by <a href="#">PRAVEEN & CHAKRAVARTHI</a></p>
</div>
</body>
</html>
<?php	
	
}
else
{
?>
<script type="text/javascript">
alert("Wrong Username");
document.location="login.php";
</script>
<?php
}
?>

