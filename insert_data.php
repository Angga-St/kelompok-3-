<?php
require './koneksi.php';

$nama = htmlspecialchars($_POST['nama']);
$alamat = htmlspecialchars($_POST['alamat']);

$insert = mysqli_query($koneksi, "INSERT INTO rest_api VALUES (null, '$nama', '$alamat')");
$last_insert_id = mysqli_insert_id($koneksi);
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM rest_api WHERE id = '$last_insert_id'"));

echo json_encode([
    'success' => true,
    'data' => $data
]);
exit;
