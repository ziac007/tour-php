<?php 
session_start();
require "../config/config.php";
$email = $_POST['name'];
$pass = $_POST['pass'];

$query = "SELECT * FROM admin where name = '$email' and password = '$pass'";
$statement = $connection->prepare($query);
$statement->execute();
$user = $statement->fetchAll();
if($user){
    foreach($user as $row){}
    $_SESSION['adname'] = $email;
    echo "logged in";
} 
else{
    echo "invalid credentials";
}

?>