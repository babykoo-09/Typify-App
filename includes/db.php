<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'typify';

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die(json_encode(['status' => 'error', 'message' => 'Koneksi gagal: ' . mysqli_connect_error()]));
}
?>