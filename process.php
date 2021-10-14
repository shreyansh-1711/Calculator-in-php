<?php
	session_start();	
	$_SESSION["a"]=$_GET["t1"];
	$_SESSION["b"]=$_GET["t2"];
	
	header("location:values.php");
	
?>