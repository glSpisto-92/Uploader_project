<?php
include 'connection_db.php';

$pdo_statement = $db->prepare("SELECT * FROM file_salvati");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tutti i file</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome file</th>
                    <th>Nome univoco</th>
                    <th>Grandezza file</th>
                    <th>Formato</th>
                    <th>Data|Ora</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (!empty($result)) {
                    foreach ($result as $row) {
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nome_file']; ?></td>
                            <td><?php echo $row['nome_univoco']; ?></td>
                            <td><?php echo $row['grandezza_file']; ?></td>
                            <td><?php echo $row['formato']; ?></td>
                            <td><?php echo $row['data_ora']; ?></td>
                        </tr>
                <?php }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>