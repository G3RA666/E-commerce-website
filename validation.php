<?php 

session_start();

$con = new mysqli('localhost:3306', 'root', '', 'login');
if ($con->connect_error) {
    die("database connection failed: ". $con->connect_error);
}

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT * FROM `usertable` WHERE name = '$name' && password ='$pass'";

$result = $con->query($s);

$num = $result->num_rows;

if ($num >= 1) {
    header('location:HOME.php');
}
else
{
  header('location:WrongPass.php');
}


?>