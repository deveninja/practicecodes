<?php 

include 'config/dbinitiate.php';

$status = new Dbinitiate;

$status->getConnection();

if (!$status) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} else {
    echo "Success: A proper connection to MySQL was made! Your database is great.";
}







?>