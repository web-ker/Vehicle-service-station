<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<pre class="a-b-r-La" style="user-select: text; display: block; font-family: &quot;Courier New&quot;, Courier, monospace, arial, sans-serif; margin: 0px; white-space: pre-wrap; overflow-wrap: break-word; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">&lt;?php 
include('db.php'); 
$login_id=$_POST['login_id'];
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];
$hintq=$_POST['hintq'];
$hinta=$_POST['hinta'];
$sql="update  login_details set username='$username',password='$password',type='$type',hintq='$hintq',hinta='$hinta' where login_id='$login_id'";
mysql_query($sql);
?&gt;
&lt;script&gt;
alert("updated..");
document.location="login_details_view.php";
&lt;/script&gt;</pre>
</body>
</html>
