<?php
include 'connection_db.php';

if (empty($_FILES["fileToUpload"]["tmp_name"])) {
    echo 'non hai caricato nessun file!';
    exit;
}

$path = $_FILES['fileToUpload']['name'];
$path_size = $_FILES['fileToUpload']['size'];
$path_size /= (1024 * 1024);
$ext = pathinfo($path, PATHINFO_EXTENSION);


if ($ext == 'docx' || $ext == 'pdf' || $ext == 'xlsx') {
    // var_dump($ext);
    var_dump('Il file è stato caricato correttamente!');
} else {
    echo 'hai caricato un formato file non supportato! I formati accettati sono pdf, word, excel';
    exit;
}

$id_univoco = uniqid();
$target = "file_salvati/" . $id_univoco;
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target . '.' . $ext)) {
    $query = "INSERT INTO `file_salvati` (`nome_file`, `nome_univoco`, `grandezza_file`, `formato`, `data_ora`) VALUES ('$path', '$id_univoco', '$path_size', '$ext', CURRENT_TIMESTAMP)";
    $db->exec($query);
}
