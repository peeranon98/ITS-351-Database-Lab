<?php
//host , user, pass , db name
$conn = new mysqli('localhost','root2','root','lab5');

//check connection
if ($conn -> connect_errno){
    echo "ERROR --> ".$conn -> connect_error;
}




?>
<html>
<body>
<h1> Database connection </h1>
<hr>
	<a href="add.php">Add new employ</a>
<hr>
<?php
    $q = 'show tables;';
    $res = $conn -> query($q);
    if ($res){
        while($row = $res->fetch_array()){
            echo "<br>".$row[0];
        }
    }

?>
<hr>

<?php
    $q = 'select * from employee_data order by emp_id asc;';
    if($res = $conn->query($q)){
        $colh = array("a","b","c","d","e","f","g","h","i");
        echo '<table border="1">';
        echo '<tr>';
            for ($i = 0 ; $i < count($colh); $i++){
                echo '<th>'.$colh[$i].'</th>';
            }
        echo '</tr>';
        while($ro = $res->fetch_array()){
            //echo "<hr>";
            //var_dump($ro);
            echo '<tr>';
            for ($i = 0 ; $i < count($ro)/2 ; $i++){
                echo '<td><a href="detail.php?rowid='.$ro['emp_id'].'">'.$ro[$i].'</a></td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
?>


</body>
</html>
<?php
$conn -> close(); //connection closed
?>