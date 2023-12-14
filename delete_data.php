<?php
require './koneksi.php';

$id = htmlspecialchars($_GET['id']);

$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM rest_api WHERE id = '$id'"));
$update = mysqli_query($koneksi, "DELETE FROM rest_api WHERE id='$id'");

echo json_encode([
    'success' => true,
    'data' => $data
]);
exit;
