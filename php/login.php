<?php
require_once('../connection_db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form method="post" action="php/login.php">
        <h1>Login</h1>
        <input type="text" id="username" placeholder="Username" name="username">
        <input type="password" id="password" placeholder="Password" name="password">
        <button type="submit" name="login">Accedi</button>
    </form>
</body>

</html>