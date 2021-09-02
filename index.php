<?php
include 'connection_db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js" integrity="sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ==" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>File Uploader | Home</title>
</head>

<body>
    <div class="container wrapper">
        <div class="container container_form">

            <!-- form per uploadare file a db -->

            <form id="form_file" action="upload.php" method="post" enctype="multipart/form-data">
                <h2 class="mb-4">Ciao! seleziona il file da caricare.</h2>

                <div class="search_btn">
                    <input class="btn btn-secondary" type="file" name="fileToUpload" id="fileToUpload">
                </div>
            </form>

            <div class="upload_btn">
                <button class="btn btn-primary" id="btn_charged" value="Upload File" name="submit">Carica file</button>
            </div>

            <div>
                <button class="btn btn-info"><a href="view.php">Tutti i file</a></button>
            </div>
        </div>

        <!-- form registrazione/login -->

        <div class="container container_register">
            <form class="form_register" action="php/register.php" method="POST">
                <h2>Registrati</h2>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>

                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <input class="mt-4" type="submit" value="Registrati">
            </form>
            <a href="php/login.php"><input class="mt-4" type="submit" value="Effettua il login"></a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>