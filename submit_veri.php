<?php
include 'db_connect.php';

$ogrenci_id = $_POST['ogrenci_id'];
$atik_turu = $_POST['atik_turu'];
$atik_kutlesi = $_POST['atik_kutlesi'];
$hatali_ayrisim = $_POST['hatali_ayrisim'];

$sql = "INSERT INTO atiklar (ogrenci_id, atik_turu, atik_kutlesi, hatali_ayrisim)
VALUES ('$ogrenci_id', '$atik_turu', '$atik_kutlesi', '$hatali_ayrisim')";

if ($conn->query($sql) === TRUE) {
    $kredi = $atik_kutlesi * 10;
    $update_sql = "UPDATE ekolojik_kredi SET toplam_kredi = toplam_kredi + $kredi, toplam_atik = toplam_atik + $atik_kutlesi WHERE ogrenci_id = '$ogrenci_id'";
    $conn->query($update_sql);
    echo "Atık başarıyla eklendi!";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
