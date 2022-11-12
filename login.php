<!DOCTYPE html>
<html>
<head>
<title>Dark Login Form Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dark Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, SonyErricsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
</head>
<body>
<?php include('val.php'); ?>
<div class="container">
<h1> LOGIN </h1>
     <div class="contact-form">
	 <div class="signin">
     <form method="post" ID="formID" action="logcheck.php">
	      <p>Username</p>
	      <input type="text" name="username" id="username" class="form-control validate[required] user"  required />
		 <p>Password</p>
		  <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
		  <input type="password" class="pass"  name="password"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"id="myInput" required />
		    <input type="checkbox" onclick="myFunction()">Show Password
       <div align="center">
          <input type="submit" value="Login" align="center " />
		 </div>
		 <dsiv>
		   <div align="center"><b> </b></div>
		 </div>
		
	      <div align="center"><p><b><a href="reg2.php" class="user" style="color:#CCCCCC ">New User? Sign Up</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<b><a href="for_get.php" class="user" style="color:#CCCCCC ">Forgot Password ?</a></b></p>
		  <p> .</p>
        </div>
     </form>
	 </div>
	 </div>	 
</div>
<div class="footer">
     <p>2021-2022 Copyright & copy All Rights Reserved | Design by <b><a href="#">Y Rajesh</a></b></p>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>