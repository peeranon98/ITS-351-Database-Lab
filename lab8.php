<?php
include('dbconn.php');
?>
<html>
<body>
<?php

$q = "select * from product";
if($res = $conn->query($q))
{
	echo '<table border="1">';
	$tt = 0; //tt to 0
	while ($row = $res->fetch_array())
	{
		echo '<tr>';
		echo '<td>'.$row[0].'</td>';
		echo '<td>'.$row[1].'</td>';
		echo '<td>'.$row[2].'</td>';
		echo '<td>'.$row[3].'</td>';
		echo '<td>'.'<a href="edit_page.php?eid='.$row[0].'">Edit</a>'.'</td>';
		
		echo '</tr>';
		$tt += ($row[2] * $row[3]);
		// $tt = $tt + ???
	}
	echo '<tr>';
	echo '<td colspan="2">Total : </td>';
	echo '<td>' . $tt . '</td>';
	echo '<td colspan="2"></td>';
    echo '</tr>';
    echo '</table>';
}
?>
</body>
</html>
