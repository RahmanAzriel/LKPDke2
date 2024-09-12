<?php


function wrapText($text) {
    $count = str_split($text); //guna str_split untuk memecah string menjadi array


    if (count($count) > 30) { //jika karakternya lebih dari 30
        $text = substr($text, 0 , 30); //maka ambil 30 karakter pertama
        $text .= "..."; //dan akan ditambahkan titk titk untuk menutupi dari sisa karakternya
    }

    echo $text;
}

$kata = "Lorem ipsum dolor sit memet, consectetur adipiscing elit. Nulla vel auctor turpis. Donec vel erat sollicitudin, accumsan lectus eget, blandit orci. Integer ut erat ipsum. Sed porta at erat vitae ornare. Aenean auctor, lacus ac condimentum ultricies, mi enim lobortis nibh, sit amet laoreet arcu felis nec quam. Cras euismod ex magna, in scelerisque urna laoreet quis. Aliquam tincidunt lacus sed tempor dapibus. Morbi sit amet dolor hendrerit, sollicitudin purus non, blandit sem.";

echo "<b>Kalimat awal : </b> " . $kata . "</br>";

wrapText($kata); //memanggil fungsi wrapText dengan isian $kata
?>