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
    <link rel="stylesheet" href="css/style.css">
    <title>File Uploader</title>

</head>

<body>
    <form id="form_file" action="upload.php" method="post" enctype="multipart/form-data">
        <h2>Seleziona il file da caricare</h2>

        <div class="search_btn">
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
    </form>

    <div class="upload_btn">
        <button id="btn_charged" value="Upload File" name="submit">Caric stu file</button>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>