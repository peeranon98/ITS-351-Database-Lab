<!DOCTYPE html>
<html>
<head>
	<title>PHP form</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<a href="a.html"><h1>PHP forms</h1></a>
	<hr>
	<?php
$myvar1 = "";
if (isset($_POST['var1']))
		$myvar1 = $_POST['var1'];
?>
<div class="test">
	<p> p in div </p>
	<span><p> p in span after div </p></span>
	<form action="page2.php" method="POST">
		My name:<input type="email" name="myname" value="Default name"><br>
		<!-- <input type="submit" value="Update my info :)"/> -->
		Password:<input type="password" name="mypw" value=""><br>
		<p>p in test and form<br></p>
		<input type="checkbox" name="status1" value="Baowaan"> Baowaan<br>
		<input type="checkbox" name="status2" value="Kwamdun"> Kwamdun<br>
		<input type="checkbox" name="status3" value="Mareng"> Mareng<br>
		Listbox:
		<br>
		I speak
		<select name="lang"><br>
		<option value="java"> Java </option>
		<option value="c"> C </option>
		<option value="python"> Python </option>
		</select>
		<input type="submit" value="Update my info :)"/>
	</form>
</div>
</body>
</html>