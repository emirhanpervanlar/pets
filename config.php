<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=up_bordo", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn-> exec("SET CHARACTER SET utf8");
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>