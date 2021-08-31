<?php

try {
    $hostname = "localhost:8889";
    $dbname = "uploader";
    $user = "root";
    $pass = "root";
    $db = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    echo "Errore: " . $e->getMessage();
    die();
}
