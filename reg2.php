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
<h1>REGISTRATION</h1>
     <div class="contact-form">
	 <div class="signin">
	 <?php include('val.php'); ?>
	 <div class="container">
	 

	 
     <form method="post" ID="formID" name="formID"   action="registration_insert.php">
	      <p>Enter Name</p>
	      <input type="text" class="validate[required,custom[onlyLetter]] " id="customer_name" name="customer_name"  placeholder="Enter Here"  />
		  
		  <p>Address</p>
	      <input type="text" class="validate[required] " name="customer_add" id="customer_add"    />
		  <p>Mobile Number</p>
	      <input type="text"  class="validate[required,custom[mobile]] "maxlength="10" pattern="[6-9]{1}[0-9]{9}" name="customer_contact_no" id="customer_contact_no"  />
		  
		  
		  <p>City</p>
	      <input type="text" class="validate[required,custom[onlyLetter]] " name="customer_city" id="customer_city"  />
		  
		  <p>Email</p>
	      <input type="text" class="validate[required,custom[email]] " name="customer_email" id="customer_email"  />
		  
		  <p>Password </p>
	     
		  <input type="password" maxlength="15" minlength="8" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"id="myInput" />
		  <input type="checkbox" onclick="myFunction()">Show Password
		  
		  <p>Hint Question</p>
		  <p>
		    <input name="hintq" type="text" id="hintq"  class="validate[required]"/>
		  </p>
		  <span class="wthree-field">
	      
	      </span>
		  
		  <p>Hint Answer</p> 
		  <input name="hinta"  type="text" class="validate[required]" id="hinta" />

         <div align="center">
		 
          <input align="" type="submit" value="SignUp" />
	    </div>
     </form>
	 </div>
	 </div>	 
	 </div>
</div>
<div class="footer">
     <p>Copyright & copy;  All Rights Reserved | Design by <a href="#">Y Rajesh</a></p>
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