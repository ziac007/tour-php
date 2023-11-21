

<?php

include '../config/config.php';

$id = $_GET['id']; // Get id from url bar



$sql = "SELECT * FROM package WHERE id = '$id'";
$statement = $connection->prepare($sql);
$statement->execute();

$result =  $statement->fetchAll();
$loc = "../image/";
foreach ($result as $row) {

    unlink($loc . $row['image']);
}
$sql = "DELETE  FROM package where id = '$id'";
$statement = $connection->prepare($sql);
$statement->execute();

header("Location: ../add package.php");


?>