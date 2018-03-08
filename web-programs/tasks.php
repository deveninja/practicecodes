<?php


try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=fyp', 'laraveladmin', 'Fishbone3136!@#');

} catch (PDOException $e) {

    die($e->getMessage());

}


$query = $pdo->prepare('SELECT * FROM wp_3_project_tasks');

$query->execute();

$tasks = $query->fetchAll(PDO::FETCH_OBJ);





require 'program.view.php';