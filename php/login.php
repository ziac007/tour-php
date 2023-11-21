<?php
session_start();
require "../config/config.php";
$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "SELECT * FROM login where name = '$email' and password = '$pass'";
$statement = $connection->prepare($query);
$statement->execute();
$user = $statement->fetchAll();
if($user){
    foreach($user as $row){}
    $_SESSION['name'] = $email;
    echo "logged in";
} 
else{
    echo "invalid credentials";
}
?>