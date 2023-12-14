<?php
require './koneksi.php';

$where = '';
if(isset($_GET['where'])) {
    $id = htmlspecialchars($_GET['where']);
    $where = "WHERE id='$id' LIMIT 1";
}

$query = mysqli_query($koneksi, "SELECT * FROM rest_api $where");
$data = mysqli_fetch_all($query);

echo json_encode([
    'success' => true,
    'data' => $data
]);
exit;
