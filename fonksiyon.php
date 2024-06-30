<?php
// Fonksiyon tanımı
function printLesson($pdo, $day, $saat) {
    $sql = "SELECT * FROM $day WHERE Saat=:saat";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':saat' => $saat]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        echo "{$row['Ders']}<br>{$row['ders_türü']}<br>{$row['OgretimElemani']}<br>{$row['Derslik']}";
    } else {
        echo "";
    }
}


?>