<?php
include('db.php');
?>
<html>
<body>
<h1>Product Lists</h1>
<hr>
<?php
$q = "SELECT * FROM product";
if ($res = $conn->query($q))
{
	echo '<table border="1">';
	while ($row = $res->fetch_array())
	{
		echo '<tr>';
		echo '<td>'.$row['id'].'</td>';
		echo '<td>'.$row['p_name'].'</td>';
		echo '<td>'.$row['p_price'].'</td>';
		echo '<td>'.$row['p_stock'].'</td>';
		echo '<td>'.
		'<a href="del_product.php?product_id='.$row['id'].'">Delete</a>' .
		'</td>';
		echo '</tr>';

	}
	echo '</table>';
}

?>

<h1>Insert Product</h1>
<hr>
<form action="insert_product.php" method="POST">
Product name : <input type="text" name="p_name"><br>
Product price : <input type="text" name="p_price"><br>
Product quantity : <input type="text" name="p_quan"><br>
<br>
<input type="submit" value="ADD"> 
<input type="reset" value="CLEAR">
</form>

</body>
</html>
