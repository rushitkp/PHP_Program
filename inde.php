<style>
	table {
		background-color: yellow;
	}

	td {
		color: red;
	}

	.bl {
		background-color: blue;
		color: white;
	}
</style>
<form action="" method="post">
	Name
	<input type="text" name="t1"></br>
	Mobile No
	<input type="number" name="t2"></br>
	Subject
	<input type="text" name="t3"></br>
	Message
	<textarea name="t4"></textarea></br>
	</br>
	<input type="submit" name="s1" value="Insert Data">
</form></br>
<a href="search.php">Search Data</a></br>
<?php
if (isset($_POST['s1'])) {
	$cn = mysqli_connect("localhost", "root", "", "cjpbca");
	$f1 = $_POST['t1'];
	$f2 = $_POST['t2'];
	$f3 = $_POST['t3'];
	$f4 = $_POST['t4'];
	mysqli_query($cn, "insert into feedback(fname,fmno,fsub,fmsg) VALUES ('$f1','$f2','$f3','$f4')");
	//mysqli_query($cn,"insert into feedback VALUES(2,'$f1','$f2','$f3','$f4','$f5')");
	echo ("Insert Data Successfully");
}
?>
<table style="border:2px;">
	<tr style="align-items: center;">
		<td class="bl"><b>Feedback ID</b></td>
		<td class="bl"><b>Sender Name</b></td>
		<td class="bl"><b>Sender Mobile NO</b></td>
		<td class="bl"><b>Subject</b></td>
		<td class="bl"><b>Message</b></td>
		<td class="bl"><b>Action</b></td>
	</tr>

	<?php
	$cn = mysqli_connect("localhost", "root", "", "cjpbca");
	$rows = mysqli_query($cn, "select * from feedback");
	while ($data = mysqli_fetch_array($rows)) {
		echo ("<tr>");
		echo ("<td>" . $data["fid"] . "</td>");
		echo ("<td>" . $data["fname"] . "</td>");
		echo ("<td>" . $data["fmno"] . "</td>");
		echo ("<td>" . $data["fsub"] . "</td>");
		echo ("<td>" . $data["fmsg"] . "</td>");
		echo ("<td><a href='update.php?id=" . $data["fid"] . "'>Update</a> || ");
		echo ("<a href='delete.php?id=" . $data["fid"] . "'>Delete</a></td>");
		echo ("</tr>");
	}
	?>
</table>