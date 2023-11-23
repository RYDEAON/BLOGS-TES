<?php
$serverName = "localhost";
$username = "root";
$password = "";

try {
     $conn = new PDO("mysql:host=$serverName;dbname=blog", $username, $password);

     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   echo "bağlantı hatası: ". $e->getMessage();
}

?>