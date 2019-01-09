<?php

function rec_post($a,$connect)
{
	if (isset($_POST[$a]) && strlen($_POST[$a]) > 0)
		return $connect->real_escape_string($_POST[$a]);

	return False;
}
include('db.php');

$var1 = rec_post('p_name',$conn);
$var2 = rec_post('p_price',$conn);
$var3 = rec_post('p_quan',$conn);
if ($var1 && $var2 && $var3)
{
	
	
	$q = "INSERT INTO product(p_name,p_price,p_Stock) " .
	" VALUES('".$var1."','".$var2."','".$var3."')";
	//echo $var1;
	//echo $var2;
	//echo $var3;
	//echo $q;
	
	if (!$conn->query($q))
	{
		echo "INSERT FAIL!!! --> " . $q;
	}
	else
	{
		header("Location: products.php");
	}
	
}

?>
