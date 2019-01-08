<?php
//host, username, password, db name
$conn = new mysqli('localhost','root2','root','lab5');

//check connection
if ($conn -> connect_errno)
{
    echo "ERROR-->" . $conn->connect_error;
}

if(isset($_POST['in_fname']))
{
    $r_fname = $_POST['in_fname'];
    $r_lname = $_POST['in_lname'];
    $r_age = $_POST['in_age'];
    //var_dump($r_fname);
    //var_dump($r_lname);
    //var_dump($r_age);

    if(
    strlen($r_fname) > 0 &&
    strlen($r_lname) > 0 &&
    strlen($r_age) > 0)
    {
        $q = 'insert into employee_data(f_name, l_name, age) values('.
        '"' .$r_fname. '", '.
        '"' .$r_lname. '", '.
        '"' .$r_age. '" '.');';
        echo "<hr>" . $q;
        if ($conn->query($q))
        {
            //echo "INSERT OK!";
            header("location: lab5.php");
        }

        else
            echo "ERROR --> " . $conn->error;
    }
}
?>

<html>
<body>
<h1> Add New Employee </h1>
<hr>
<form action = "add.php" method="POST">
    First Name: <input type="text" name="in_fname"><br>
    Last Name: <input type="text" name="in_lname"><br>
    Age: <input type="text" name="in_age"><br>
    <input type="Submit" value="Add Employee">
</form>

<hr>

<a href = "lab5.php"> GO BACK </a>

</body>
</html>

<?php
$conn->close();
?>