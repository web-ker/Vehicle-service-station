<?php
/*
$con=mysql_connect('localhost','root','');
mysql_select_db('car',$con); */

$server='localhost';
$username='root';
$pass='';
$db='car';

$conn=new mysqli($server,$username,$pass,$db);
?>