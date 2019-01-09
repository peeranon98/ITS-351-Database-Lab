<?php
include('db.php');
if (
isset($_GET['product_id']) && strlen($_GET['product_id']) > 0 &&
isset($_GET['confirm']) && strlen($_GET['confirm']) > 0
)
{
	if ($_GET['confirm'] == 'YES')
	{
		$q = "DELETE FROM product WHERE id=" . $_GET['product_id'];
		if (!$conn->query($q))
		{
			echo "ERROR DELETE FAIL!!!";
		}	
	}
	//echo "XX";
	header("Location: products.php");
}
else if (isset($_GET['product_id']) && strlen($_GET['product_id']) > 0)
{
	$q = "SELECT * FROM product WHERE id=" . $_GET['product_id'];
	if ($res = $conn->query($q))
	{
		echo 'Sure to delete this record??';
		echo '<table border="1">';
		while ($row = $res->fetch_array())
		{
			echo '<tr>';
			echo '<td>'.$row['id'].'</td>';
			echo '<td>'.$row['p_name'].'</td>';
			echo '<td>'.$row['p_price'].'</td>';
			echo '<td>'.$row['p_stock'].'</td>';
			echo '</tr>';
		}
		echo '</table>';
		echo '<hr>';
		echo '<a href="del_product.php?product_id='.$_GET['product_id'].'&confirm=YES">YES</a>';
		echo '&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<a href="del_product.php?product_id=x&confirm=NO">NO</a>';
	}
}
?>
