<?php
include 'connection_db.php';

if (empty($_FILES["fileToUpload"]["tmp_name"])) {
    echo 'non hai caricato nulla!';
    exit;
}

$path = $_FILES['fileToUpload']['name'];
$path_size = $_FILES['fileToUpload']['size'];
$path_size /= (1024 * 1024);
$ext = pathinfo($path, PATHINFO_EXTENSION);


if ($ext == 'docx' || $ext == 'pdf' || $ext == 'xslx') {
    var_dump($ext);
} else {
    echo 'e sbagliat a carica!';
    exit;
}

$id_univoco = uniqid();
$target = "file_salvati/" . $id_univoco;
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target . '.' . $ext)) {
    $query = "INSERT INTO `file_salvati` (`nome_file`, `nome_univoco`, `grandezza_file`, `formato`, `data_ora`) VALUES ('$path', '$id_univoco', '$path_size', '$ext', CURRENT_TIMESTAMP)";
    $db->exec($query);
}
