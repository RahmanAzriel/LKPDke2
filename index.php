<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="anjay">
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD']){
$teks = @$_POST['anjay'];
            //mencari Semua Simbol karakter yang bukan huruf atau angka
preg_match_all('/[&a-zA-Z0-9\s]/' , $teks , $matches); //regex aowkaowkaowkawok

if (count($matches[0]) > 0){
 $uniqueSymbols = array_unique($matches[0]);//menghilangkan karakter yang sama
 echo "Karakter Yang Terdapat Pada Kalimat : " . implode(',' , $uniqueSymbols);
} else {
    echo "Tidak Terdapat Symbol Pada Kalimat";
}
}









?>

