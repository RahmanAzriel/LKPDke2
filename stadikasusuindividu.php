<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
//pertama buatlah sebuah program yang memiliki function yang bisa menghitung jumlah karakter 
$teks = "alamak gua ganteng";

$karakerdicari = "a";
$jawir = substr_count($teks, $karakerdicari);


echo "Karakter a ditemukan sebanyak " . $jawir;
?>