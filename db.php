<?php
$conn = new mysqli('localhost','root2','root','myshop');

if ($conn->connect_errno)
{
	echo "Connection Fail!!!";
}

?>
