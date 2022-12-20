<?php
include('credential.php');
$host = "localhost"; // Nama hostnya
$username = $credential["username"]; // Username
$password = $credential["password"]; // Password (Isi jika menggunakan password)
$database = "EAS_PWeb"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
try{
    $pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
} catch(error){
    echo("cannot connect to database");
}
?>