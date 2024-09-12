<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input name="namba" required qtype="number">
        <label for="opsien">Hari pembelian</label>
        <select name="Opsien" id="">
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
        </select>
    </form>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD']){
$pembelian = @$_POST['namba'];//untuk mengambil inputan
$day = @$_POST ['Opsien'];
$totalbayar = 0;

if($pembelian >= 100000){ //untuk menentukan total bayar
    if($day == "Selasa"){
        $totalbayar = $pembelian - ($pembelian * 7 / 100);
        $totalbayar -= $pembelian * 5 / 100;
    }else {
        $totalbayar = $pembelian - ($pembelian * 7 / 100);
    }
}else{
    $totalbayar = $pembelian;
}

echo "Hari ini hari : <br>" . $day . "</br>";
echo "total pembelanjaan : <br>" . number_format($pembelian, 0 ,'.','.') . "</br>";
echo "total pembelian : <br>" . number_format($totalbayar, 0 ,'.','.') . "</br>"; //untuk menampilkan total bayar 
}
?>