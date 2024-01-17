<?php
$host = "tripwebapp-server.postgres.database.azure.com"; // Replace with your Azure database server name
$dbname = "tripwebapp-database"; // Replace with your database name
$username = "slnundsogu@tripwebapp-server"; // Replace with your Azure database username
$password = "#passwordis01"; // Replace with your Azure database password

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO to throw exceptions on error
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    echo "Unable to connect to the database: " . $e->getMessage();
}
?>
