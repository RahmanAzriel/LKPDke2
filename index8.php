<?php
$array1 = ["PPLG", "pplg", "HTL", "htl", "KLN", "kln" , "DKV", "dkv"]; //menetapkan nilai array

$kalimat_array = array_filter($array1, function($value) { //array filter untuk memfilter array dengan fungsi filter untuk mengeluarkan hanya huruf kapital
    return ctype_upper($value);//untuk megembalikan nilai array yang hanya huruf kapital
});

$unique_array = array_unique($kalimat_array); //untuk mengeluarkan angka yang unik

ksort($unique_array); //untuk mengurutkan array sesuai abjad 

foreach ($unique_array as $value) { //untuk mengeluarkan angka yang unik
    echo $value . "," . "\n";
}
