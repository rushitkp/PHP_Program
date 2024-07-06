<?php
	$cn=mysqli_connect("localhost","root","","cjpbca");
	$a=$_GET['id'];
	$q1=mysqli_query($cn,"select * from feedback where fid='$a'");
	while($r1=mysqli_fetch_array($q1))
	{
		$u1=$r1['fid'];
		$u2=$r1['fname'];
		$u3=$r1['fmno'];
		$u4=$r1['fsub'];
		$u5=$r1['fmsg'];
	}
?>
	<form action="" method="post">
	ID
	<input type="hidden" name="s1" value="<?php echo($u1); ?>"></br>
	Name
	<input type="text" name="s2" value="<?php echo($u2); ?>"></br>
	Mobile No
	<input type="number" name="s3" value="<?php echo($u3); ?>"></br>
	Subject
	<input type="text" name="s4" value="<?php echo($u4); ?>"></br>
	Message
	<textarea name="s5"><?php echo($u5); ?></textarea></br>
	</br>
	<input type="submit" name="ss2" value="Update Data">
	</form>
<?php
	if(isset($_POST['ss2']))
	{
	$cn=mysqli_connect("localhost","root","","cjpbca");
	$f1=$_POST['s1'];
	$f2=$_POST['s2'];
	$f3=$_POST['s3'];
	$f4=$_POST['s4'];
	$f5=$_POST['s5'];
	
	mysqli_query($cn,"update feedback set fname='$f2',fmno='$f3',fsub='$f4',fmsg='$f5' where fid='$f1'");
	echo("Update Data Successfully");
	header("location:index.php");
	}

?>
