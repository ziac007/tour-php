<?php
$servername = "dkintern.database.windows.net";
$username = "demo@dkintern";
$password = "DK@12345";
$database = "mytrip-db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
