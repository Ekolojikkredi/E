<?php
include 'db_connect.php';

$isim = $_POST['isim'];
$email = $_POST['email'];
$okul = $_POST['okul'];
$okul_numarasi = $_POST['okul_numarasi'];
$sifre = $_POST['sifre'];

$sql = "INSERT INTO ogrenciler (isim, email, okul, okul_numarasi, sifre)
VALUES ('$isim', '$email', '$okul', '$okul_numarasi', '$sifre')";

if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarılı!";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
