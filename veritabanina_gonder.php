<?php
require 'ConnectionPhp.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan veritabanına gönderilen verileri geri aldığım kod kısmı
    $selected_ders = $_POST["Ders"];
    $selected_ders_türü = $_POST["ders_türü"]; // Ders türünü al
    $selected_ogretim_elemani = $_POST["OgretimElemani"];
    $selected_derslik = $_POST["Derslik"];
    $selected_gun = $_POST["Gün"];
    $selected_saat = $_POST["Saat"];
    /*$selected_gun = $_POST["Gün"];
    $selected_saat = $_POST["Saat"];*/
    
    //Form'da seçilen verileri Pzt Tablosuna eklediğim kod kısmı
    if($selected_gun=="PAZARTESİ")
   {
    $sql = "INSERT INTO pzt (Ders, ders_türü, OgretimElemani, Derslik, Gün, Saat) VALUES (:Ders, :ders_tur, :OgretimElemani, :Derslik, :Gun, :Saat)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':Ders' => $selected_ders,
        ':ders_tur' => $selected_ders_türü, // Doğru yer tutucusunu kullan
        ':OgretimElemani' => $selected_ogretim_elemani,
        ':Derslik' => $selected_derslik,
        ':Gun' => $selected_gun,
        ':Saat' => $selected_saat
      /*  ':Gün' => $selected_gun,
        ':Saat' => $selected_saat*/
    ]);
    
   }

   if($selected_gun=="SALI")
   {
    $sql = "INSERT INTO salı (Ders, ders_türü, OgretimElemani, Derslik, Gün, Saat) VALUES (:Ders, :ders_tur, :OgretimElemani, :Derslik, :Gun, :Saat)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':Ders' => $selected_ders,
        ':ders_tur' => $selected_ders_türü, // Doğru yer tutucusunu kullan
        ':OgretimElemani' => $selected_ogretim_elemani,
        ':Derslik' => $selected_derslik,
        ':Gun' => $selected_gun,
        ':Saat' => $selected_saat
      /*  ':Gün' => $selected_gun,
        ':Saat' => $selected_saat*/
    ]);
    
   }

   if($selected_gun=="ÇARŞAMBA")
   {
    $sql = "INSERT INTO carsamba (Ders, ders_türü, OgretimElemani, Derslik, Gün, Saat) VALUES (:Ders, :ders_tur, :OgretimElemani, :Derslik, :Gun, :Saat)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':Ders' => $selected_ders,
        ':ders_tur' => $selected_ders_türü, // Doğru yer tutucusunu kullan
        ':OgretimElemani' => $selected_ogretim_elemani,
        ':Derslik' => $selected_derslik,
        ':Gun' => $selected_gun,
        ':Saat' => $selected_saat
      /*  ':Gün' => $selected_gun,
        ':Saat' => $selected_saat*/
    ]);
    
   }

   if($selected_gun=="PERŞEMBE")
   {
    $sql = "INSERT INTO persembe (Ders, ders_türü, OgretimElemani, Derslik, Gün, Saat) VALUES (:Ders, :ders_tur, :OgretimElemani, :Derslik, :Gun, :Saat)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':Ders' => $selected_ders,
        ':ders_tur' => $selected_ders_türü, // Doğru yer tutucusunu kullan
        ':OgretimElemani' => $selected_ogretim_elemani,
        ':Derslik' => $selected_derslik,
        ':Gun' => $selected_gun,
        ':Saat' => $selected_saat
      /*  ':Gün' => $selected_gun,
        ':Saat' => $selected_saat*/
    ]);
    
   }

   if($selected_gun=="CUMA")
   {
    $sql = "INSERT INTO cuma (Ders, ders_türü, OgretimElemani, Derslik, Gün, Saat) VALUES (:Ders, :ders_tur, :OgretimElemani, :Derslik, :Gun, :Saat)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':Ders' => $selected_ders,
        ':ders_tur' => $selected_ders_türü, // Doğru yer tutucusunu kullan
        ':OgretimElemani' => $selected_ogretim_elemani,
        ':Derslik' => $selected_derslik,
        ':Gun' => $selected_gun,
        ':Saat' => $selected_saat
      /*  ':Gün' => $selected_gun,
        ':Saat' => $selected_saat*/
    ]);
    
   }
   

    // Ekleme işlemi başarılı ise kullanıcıyı bilgilendiren mesaj 
    echo "Veriler başarıyla tabloya eklendi.";
     
}
?>


<button onclick="goBack()">Geri Dön</button>

<script>
    // Form içerisinde seçilen verileri gönderdikten sonra form sayfasına geri dönme işlevi
    function goBack() {
        window.location.href = document.referrer; // Önceki sayfaya formun içeriğini temizleyerek yönlendirme işlevi
    }
</script>









<!--<tbody>";
                        
                        

                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>
                                <td>".$row['Ders']."</td>
                                <td>".$row['ders_türü']."</td>
                                <td>".$row['OgretimElemani']."</td>
                                <td>".$row['Derslik']."</td>
                                
                                <td><form action='' method='post'>
                                    <input type='hidden' name='id' value='".$row['id']."'>
                                    <input type='submit' name='update' value='Güncelle'>
                                </form></td>
                                <td><form action='' method='post'>
                                    <input type='hidden' name='id' value='".$row['id']."'>
                                    <input type='submit' name='delete' value='Sil'>
                                </form></td>
                            </tr>";
                        }
    
                        echo "</tbody-->