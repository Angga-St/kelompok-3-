<?php
require './koneksi.php';

$id = htmlspecialchars($_GET['id']);
$nama = htmlspecialchars($_POST['nama']);
$alamat = htmlspecialchars($_POST['alamat']);

$update = mysqli_query($koneksi, "UPDATE rest_api SET nama='$nama', alamat='$alamat' WHERE id='$id'");
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM rest_api WHERE id = '$id'"));

echo json_encode([
    'success' => true,
    'data' => $data
]);
exit;
