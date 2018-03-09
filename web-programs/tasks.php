<?php

require 'functions.php';

try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=fyp', 'laraveladmin', 'Fishbone3136!@#');

} catch (PDOException $e) {

    die($e->getMessage());

}


$query = $pdo->prepare('SELECT * FROM wp_3_project_tasks LIMIT 20');

$query->execute();

$results = $query->fetchAll(PDO::FETCH_OBJ);





require 'tasks.view.php';