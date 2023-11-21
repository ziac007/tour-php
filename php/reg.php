<?php
    require "../config/config.php";
    $email = $_POST['email'];
    $pass = $_POST['pass'];
$query = "SELECT * FROM login where name = '$email' and password = '$pass'";
$statement = $connection->prepare($query);
$statement->execute();
$user = $statement->fetchAll();
if($user){
    echo "user exists";
} 
else{
    $query = "INSERT INTO `login` (`id`, `name`, `password`, `datetime`) VALUES (NULL, '$email', '$pass', current_timestamp())"; 
    $statement = $connection->prepare($query);
$result = $statement->execute();
if($result){
    echo "user created just login to go";
}
else{
    echo "something went wrong, oops contact admin";
}
}
?>


