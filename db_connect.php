<?php
$servername = "sql101.infinityfree.com";
$username = "if0_37869110";
$password = "Lnd$X!95WxnGws3"; 
$dbname = "if0_37869110_Mysql";

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
