<?php
$array1 = [80, 77, 65, 89, 55, 12, 90, 86];
$array2 = [77, 99, 55, 81, 45, 90, 98];


$combined_array = array_merge($array1, $array2);


$unique_array = array_unique($combined_array);


asort($unique_array);

foreach ($unique_array as $value) { //untuk mengeluarkan angka yang unik
    echo $value . "\n";
}
?>