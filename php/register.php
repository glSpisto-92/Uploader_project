<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


// include 'connection_db.php';
require_once('../connection_db.php');

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (email, username, password) VALUES ('$email','$username','$hashed_password')";

if ($db->query($sql)) {
    echo 'Registrazione effettuata con successo';
} else {
    echo 'Qualcosa è andato storto!';
}
