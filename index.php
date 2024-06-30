<?php require 'ConnectionPhp.php'; ?>
<?php include'fonksiyon.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haftalık Ders Programı</title>
</head>
<body>
    <div class="container">
        <div class="div1">
        
        <form action="veritabanina_gonder.php" method="post" class="form1">
            <div class="labeller">
                <label for="Ders">Dersler</label><br>
                <label for="ders_türü">Ders Türü</label><br>
                <label for="OgretimElemani">Öğretim Elemanı</label><br>
                <label for="Derslik">Derslikler</label><br>
                <label for="Gün">Gün</label><br>
                <label for="Saat">Saat</label><br>
            </div>
            <div class="selectler">
                        <select name="Ders" id="Ders" required>
                    <option value="" selected disabled></option>
                    <?php include 'vericek.php'; echo $options; ?>
                </select>
                
                
                <select name="ders_türü" id="ders_türü" required>
                    <option value="" selected disabled></option>
                    <option value="TEORİK">TEORİK</option>
                    <option value="UYGULAMALI">UYGULAMALI</option>
                   
                </select>

                
                <select name="OgretimElemani" id="OgretimElemani" required>
                    <option value="" selected disabled></option>
                    <?php include 'vericek.php'; echo $options2; ?>
                </select>

                
                <select name="Derslik" id="Derslik" required>
                    <option value="" selected disabled></option>
                    <?php include 'vericek.php'; echo $options3; ?>
                </select>

                
            <select name="Gün" id="Gün" required>
                <option value="" selected disabled></option>
                <option value="PAZARTESİ">PAZARTESİ</option>
                <option value="SALI">SALI</option>
                <option value="ÇARŞAMBA">ÇARŞAMBA</option>
                <option value="PERŞEMBE">PERŞEMBE</option>
                <option value="CUMA">CUMA</option>
            </select>

            <select name="Saat" id="Saat" required>
                <option value="" selected disabled></option>
                <option value="17.00-17.45">17.00-17.45</option>
                <option value="18.00-18.45">18.00-18.45</option>
                <option value="19.00-19.45">19.00-19.45</option>
                <option value="20.00-20.45">20.00-20.45</option>
                <option value="21.00-21.45">21.00-21.45</option>
                <option value="22.00-22.45">22.00-22.45</option>
                <option value="23.00-23.45">23.00-23.45</option>
            </select>


            </div>
    
    
   
    
    <input type="submit" class="gndr" value="Gönder">
</form>
<form action="" method="post">
                <input type="submit" class="dpo" name="show_table" value="Ders Programını Oluştur">
            </form>
        </div>
        <div class="div2">
            

           
                
             
                
            
                <table border=1>
                    <thead>
                        <tr>
                            <th>SAAT</th>
                            <th>PAZARTESİ</th>
                            <th>SALI</th>
                            <th>ÇARŞAMBA</th>
                            <th>PERŞEMBE</th>
                            <th>CUMA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>17:00 - 17:45</td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'pzt', '17.00-17.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'salı', '17.00-17.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'carsamba', '17.00-17.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'persembe', '17.00-17.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'cuma', '17.00-17.45');
        

                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>18:00 - 18:45</td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'pzt', '18.00-18.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'salı', '18.00-18.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'carsamba', '18.00-18.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'persembe', '18.00-18.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'cuma', '18.00-18.45');
        

                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>19:00 - 19:45</td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'pzt', '19.00-19.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'salı', '19.00-19.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'carsamba', '19.00-19.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'persembe', '19.00-19.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'cuma', '19.00-19.45');
        

                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>20:00 - 20:45</td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'pzt', '20.00-20.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'salı', '20.00-20.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'carsamba', '20.00-20.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'persembe', '20.00-20.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'cuma', '20.00-20.45');
        

                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>21:00 - 21:45</td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'pzt', '21.00-21.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'salı', '21.00-21.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'carsamba', '21.00-21.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'persembe', '21.00-21.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'cuma', '21.00-21.45');
        

                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>22:00 - 22:45</td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'pzt', '22.00-22.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'salı', '22.00-22.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'carsamba', '22.00-22.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'persembe', '22.00-22.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'cuma', '22.00-22.45');
        

                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>23:00 - 23:45</td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'pzt', '23.00-23.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'salı', '23.00-23.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'carsamba', '23.00-23.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'persembe', '23.00-23.45');
        

                            }
                            ?></td>
                            <td><?php 
                            if (isset($_POST['show_table'])) {
                                printLesson($pdo, 'cuma', '23.00-23.45');
        

                            }
                            ?></td>
                        </tr>
                    </tbody>
                </table>
                
           
             
        
            
        </div>
    </div>
</body>
</html>