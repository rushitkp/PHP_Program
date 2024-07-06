<?php
	$a=$_GET['id'];
	$cn=mysqli_connect("localhost","root","","cjpbca");
	mysqli_query($cn,"delete from feedback where fid='$a'");
	echo("Feedback $a Data Deleted");
	header("location:index.php");
?>
