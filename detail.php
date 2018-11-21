<?php
//host , user, pass , db name
$conn = new mysqli('localhost','root2','root','lab5');

//check connection
if ($conn -> connect_errno){
	echo "ERROR --> ".$conn -> connect_error;
}
$key = $_GET['rowid'];
$q = "select * from employee_data "."join employee_per on ".
"employee_data.emp_id = employee_per.e_id"." where emp_id =".$key.";";
if ($res = $conn -> query($q)){
	while($ro = $res -> fetch_array()){
		//var_dump($ro);
		$ui = $ro;
	}
}
?>
<html>
<body>

<h1> Person Detail<u><?php echo $ui['f_name']." ".$ui['l_name'];?></u></h1>
<hr>

First name:<?php echo $ui['f_name'];?> <br>
Last name:<?php echo $ui['l_name'];?> <br>
Age:<?php echo $ui['age'];?> <br>
Address:<?php echo $ui['address'];?> <br>

<hr>
<a href="lab5.php"> Go Back </a>


</body>
</html>
<?php
$conn -> close(); //connection closed
?>