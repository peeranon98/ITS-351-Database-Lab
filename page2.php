<!DOCTYPE html>
<html>
<head>
	<title>page2</title>
</head>
<body>
	<?php
		if (isset($_POST['myname']))
			$myname = $_POST['myname'];
		if (isset($_POST['mypw']))
			$mypw = $_POST['mypw'];
	?>
	My name is <b><?php echo $myname;  ?></b><br>
	My password is <b><?php echo $mypw;  ?></b><br>
	My status is <u>
		<?php
		if (isset($_POST['status1']))
			$s1=$_POST['status1'];
		if (isset($_POST['status2']))
			$s2=$_POST['status2'];
		if (isset($_POST['status3']))
			$s3=$_POST['status3'];
		echo $s1 .",". $s2 .",". $s3;
		 ?></u>
	<a href="form.php"> Back to edit </a>
</body>
</html>