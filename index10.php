

<?php

function Cekjawab($nama, ...$arrjawaban){
    $jawaban = ['A', 'B' , 'C' , 'C' , 'D' , 'A' , 'B' , 'D' , 'A']; //menetapkan jawaban
    $arrbenar = []; // menyimpan jawaban benar

    foreach($jawaban as $key => $value) { 
        if($arrjawaban[$key] == $value){ //arr jawban digunakan unntuk menentukan jawaban yang benar atau salah
            $arrbenar[$key] = true; // menyimpan jawaban benar 
        }else{
            $arrbenar[$key] = false; // menyimpan jawaban salah
        }
    }
    echo "Nama : " . $nama . "<br>";
    echo "Jawaban Benar nya : " . count(array_keys($arrbenar, true)). "<br>"; //count digunakan untuk menghitung jawaban benar
    echo "Jawaban Salah nya : " . count(array_keys($arrbenar,false)). "<br>"; //yang ini buat yang salah 
}
Cekjawab("EL", "B", "B", "C", "C", "D", "A", "B", "D", "A", 'C');


?>