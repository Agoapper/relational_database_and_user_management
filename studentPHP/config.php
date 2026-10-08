<?php
// config.php
$host = "localhost";   // L'ip du serveur qui a la base de données
$user = "root"; // Username bawaan XAMPP   ( par soucis de sécurité, ne jamais utilisé root)
$pass = ""; // Password bawaan XAMPP (kosong)
$db = "db_school";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
die("failed connection: " . mysqli_connect_error());
}
?>