<?php
	session_start();
	$a=$_SESSION["a"];
	$b=$_SESSION["b"];
	$c=$a-$b;
	
	include  "common.php";
	echo "<center>";
	echo "<table border=1 cellpadding=10>";
	echo "<tr><td>First Value Is<td>$a";
	echo "<tr><td>Second Value Is<td>$b";
	echo "<tr><td>Subtraction Is<td>$c";
	echo "</table>";
	
	
?>