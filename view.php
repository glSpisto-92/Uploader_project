<?php
include 'connection_db.php';

$pdo_statement = $db->prepare("SELECT * FROM file_salvati ORDER BY id DESC");
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
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Uploader | Tutti i file</title>
</head>

<body>
    <div class="container">
        <div class="header_views">
            <h1 class="mt-3 mb-4">I tuoi file</h1>
            <button class="btn btn-warning"><a href="folder.zip">Scarica tutti i file <i class="fas fa-download"></i></a></button>
            <button class="btn btn-secondary"><a href="index.php">Torna alla home</a></button>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome file</th>
                    <th>Nome univoco</th>
                    <th>Grandezza file</th>
                    <th>Formato</th>
                    <th>Data|Ora</th>
                    <th>Azioni</th>
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
                            <td><a target="_blank" href="file_salvati/<?php echo $row['nome_univoco']; ?>.<?php echo $row['formato']; ?>">Scarica <i class="fas fa-download"></i></a></td>
                        </tr>
                <?php }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>