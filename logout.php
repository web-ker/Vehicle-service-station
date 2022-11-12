<?php 
session_start();
unset($_SESSION["uname"]);
session_destroy();

?>

<script>
alert("successfully Logged Out");
document.location="index.php";
</script>