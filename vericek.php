<?php
require 'ConnectionPhp.php';
$sql = "SELECT  ders_adı, ders_türü FROM dersler";
$sql2 = "SELECT  CONCAT(Ad, ' ', Soyad) AS OgretimUyesi FROM OgretimUyeleri"; // Burada veritabanındaki Ad ve Soyad sütünlarını birleştirme işlemi yaptım.
$sql3 = "SELECT derslik_kodu FROM derslikler";
//$sql4 = "SELECT Gün, Saat FROM günvesaat";

$result = $pdo->query($sql);
$result2 = $pdo->query($sql2);
$result3 = $pdo->query($sql3);
//$result4 = $pdo->query($sql4);


$options = ""; // Option etiketlerini tuttuğum değişkenler
$options_ders_türü = "";
$options2 = "";
$options3 = "";
/*$options_gun = "";
$options_saat = "";*/

if ($result->rowCount() > 0) {
    // Verileri option etiketlerine dönüştürme işleminin yapıldığı kod bloğu
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $options .= "<option value='".$row["ders_adı"]."'>".$row["ders_adı"]."</option>";
        $options_ders_türü .= "<option value='".$row["ders_türü"]."'>".$row["ders_türü"]."</option>";
    }
    while($row2 = $result2->fetch(PDO::FETCH_ASSOC)) {
        $options2 .= "<option value='".$row2["OgretimUyesi"]."'>".$row2["OgretimUyesi"]."</option>"; // Tam adı göster
    }
    while($row3 = $result3->fetch(PDO::FETCH_ASSOC)) {
        $options3 .= "<option value='".$row3["derslik_kodu"]."'>".$row3["derslik_kodu"]."</option>";
    }
    /*while($row4 = $result4->fetch(PDO::FETCH_ASSOC)) {
        $options_gun .= "<option value='".$row4["Gün"]."'>".$row4["Gün"]."</option>";
        $options_saat .= "<option value='".$row4["Saat"]."'>".$row4["Saat"]."</option>";
    }*/
    
} else {
    $options = "<option>Veri bulunamadı</option>";
}
?>