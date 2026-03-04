<?php

function ganjilGenao($awal, $akhir) {
$genap = [];
$ganjil = [];

    for ($angka = $awal; $angka <= $akhir; $angka++) {
        if ($angka % 2 == 0) {
            $list_genap[] = $angka;
        }
        else {
            $list_ganjil[] = $angka;
        }
    }

    
    echo "Jumlah bilangan genap: " . count($list_genap) . "\n";
    echo "Jumlah bilangan ganjil: ". count($list_ganjil) . "\n\n";

    echo "List Bilangan Ganjil rentang  :". $awal - $akhir;


    foreach ($list_gqanjil as $list_ganjil) {
        echo "$list_ganjil ";
    }

    echo "\nList Bilangan Genap rentang : $awal - $akhir";
    foreach ($list_genap as $list_genap) {
        echo "$list_genap ";
    }
}

ganjilGenao(50, 100);

