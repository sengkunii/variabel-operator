<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Penjumlahan Pengurangan</title>
</head>
<body>
    <?php
        $angka_pertama = 15;
        $angka_kedua =  45;
        $jumlah = $angka_pertama + $angka_kedua;
        $hasil = $jumlah - "100";
        $space = "<br>";

        echo "Angka pertama  = ".$angka_pertama .$space;
        echo "Angka kedua    = ".$angka_kedua .$space;
        echo "Hasil penjumlahan dari dua angka diatas adalah ".$jumlah .$space;
        echo " Hasil dari ".$jumlah. " - 100 = ".$hasil;
    ?>
</body>
</html>