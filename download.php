<?php
include 'connection_db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stat = $db->prepare("select *from file_salvati where id=?");
    $stat->bindParam(1, $id);
    $stat->execute();
    $data = $stat->fetch();

    // $file = 'file_salvati/' . $data['nome_file'];
    $file = 'certificato boolean.pdf';

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
}
