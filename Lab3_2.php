<html>
<body>


<?php
$myvar1 = "";
if (isset($_POST['myvar1']))
	$myvar1 = $_POST['myvar1'];
//echo $myvar1;
$nt = "";
if (isset($_POST['b1']) && $_POST['b1'] =="1") $nt ="1";
else if (isset($_POST['b2']) && $_POST['b2'] =="2") $nt ="2";
else if (isset($_POST['b3']) && $_POST['b3'] =="3") $nt ="3";
else if (isset($_POST['b4']) && $_POST['b4'] =="4") $nt ="4";
else if (isset($_POST['b5']) && $_POST['b5'] =="5") $nt ="5";
else if (isset($_POST['b6']) && $_POST['b6'] =="6") $nt ="6";
else if (isset($_POST['b7']) && $_POST['b7'] =="7") $nt ="7";
else if (isset($_POST['b8']) && $_POST['b8'] =="8") $nt ="8";
else if (isset($_POST['b9']) && $_POST['b9'] =="9") $nt ="9";
else if (isset($_POST['b0']) && $_POST['b0'] =="0") $nt ="0";

$nt=$_POST["items"];
echo "Old TEXT : " . $myvar1;
echo "<br>Click on : " . $nt;
$current = $myvar1 . $nt;

if (isset($_POST['bc']) && $_POST['bc']=="Clear cart") $current = "";
echo "<br>Current text : " . $current;
echo '<table border="1"><tr>';
for ($i=0; $i < strlen($current); $i++) { 
	if($current[$i]=="1")
		echo '<td> <img src="Print.png"> </td>';
	else if($current[$i]=="2")
		echo '<td> <img src="Loading.png"> </td>';
	else if($current[$i]=="3")
		echo '<td> <img src="Picture.png"> </td>';
}
echo '</tr></table>';


?>
<form action= "Lab3_2.php" method="POST">
		<select name="items" size="3">
		<option value="1"> Printer </option>
		<option value="2"> Computer </option>
		<option value="3"> Picture </option></select>
		<input type="submit" value="Add to cart" name="add"/>
		<input type="submit" value="Clear cart" name="bc"/>
		<input type="hidden" name="myvar1" value="<?php echo($current); ?>">

<hr>
<input type="hidden" name="myvar1" value="<?php echo $current; ?>">
<br>
<input type="submit" value="1" name="b1">
<input type="submit" value="2" name="b2">
<input type="submit" value="3" name="b3">
<br>
<input type="submit" value="4" name="b4">
<input type="submit" value="5" name="b5">
<input type="submit" value="6" name="b6">
<br>
<input type="submit" value="7" name="b7">
<input type="submit" value="8" name="b8">
<input type="submit" value="9" name="b9">
<br>
<input type="submit" value="0" name="b0">
<input type="submit" value="Clear" name="bc">
</form>
<hr>



<form action= "Lab3_2.php" method="POST">
<input type="submit" value="one" name="b1">
<input type="submit" value="two" name="b2">

</form>
<?php 
$butt1 = "";
$butt2 = "";

if (isset($_POST['b1']))
	$butt1 = $_POST['b1'];

if (isset($_POST['b2']))
	$butt2 = $_POST['b2'];

echo "<hr>[".$butt1."][".$butt2."]";

?>

</body>
</html>