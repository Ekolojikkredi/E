<?php
include 'db_connect.php';

$email = $_POST['email'];
$sifre = $_POST['sifre'];

$sql = "SELECT ogrenciler.isim, ekolojik_kredi.toplam_kredi, ekolojik_kredi.toplam_atik 
        FROM ogrenciler 
        JOIN ekolojik_kredi ON ogrenciler.ogrenci_id = ekolojik_kredi.ogrenci_id 
        WHERE ogrenciler.email='$email' AND ogrenciler.sifre='$sifre'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "İsim: " . $row['isim'] . "<br>";
        echo "Ekolojik Kredi: " . $row['toplam_kredi'] . "<br>";
        echo "Toplam Atık Miktarı: " . $row['toplam_atik'] . " kg<br>";
    }
} else {
    echo "Hiç veri bulunamadı";
}

$conn->close();
?>
