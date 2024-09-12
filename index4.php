<?php

for ($i = 1 ; $i < 10 ; $i++){ //untuk membuat baris
    for ($j = 0 ; $j < 8 ; $j++){ //untuk membuat kolom
        if ($i % 5 == 0){
            echo ""; //untuk membuat spasi
        } else {
            echo "*"; //untuk membuat bintang
        }
    }
    echo "<br>";
}







?>