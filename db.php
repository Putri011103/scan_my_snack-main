<?php
// Koneksi Database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'check_your_snack';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: ". $conn->connect_error);
}
?>