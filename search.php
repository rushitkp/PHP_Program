<form action="" method="post">
Feedback Sender Name
<input type="text" name="t1">
<input type="submit" name="s1" value="Search">
</form>
<?php
if(isset($_POST['s1']))
{
	$cn=mysqli_connect("localhost","root","","cjpbca");
	$a=$_POST['t1'];
	$q1=mysqli_query($cn,"select * from feedback where fname LIKE '%$a%'");
	while($r1=mysqli_fetch_array($q1))
	{
		echo("<p>".$r1['fid']."</p>");
		echo("<p>".$r1['fname']."</p>");
		echo("<p>".$r1['fmno']."</p>");
		echo("<p>".$r1['fsub']."</p>");
		echo("<p>".$r1['fmsg']."</p>");
	}
}
