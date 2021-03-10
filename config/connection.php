<?php
$user = 'todo_list';
$pass = '!li&ést';
$host = "localhost";
$dbname="project";
try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussite ';
} catch (\PDOException $th) {
    echo 'Connexion échouée : ' . $th->getMessage();

}
