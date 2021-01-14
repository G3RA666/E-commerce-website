<?php 

session_start();

$con = new mysqli('localhost:3306', 'root', '', 'login');
if ($con->connect_error) {
    die("database connection failed: ". $con->connect_error);
}

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT * FROM `usertable` WHERE name = '$name'";

$result = $con->query($s);

$num = $result->num_rows;

if ($num >= 1) {
    header('location:UsernameTaken.php');
}
else
{
    $req = "INSERT INTO  usertable (name, password) VALUES ('$name', '$pass')";
    $con->query($req);
    header('location:Registrationcomplete.php');
}


?>