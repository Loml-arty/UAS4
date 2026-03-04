<?php

do {
    echo  'Masukan Nilai Tugas : ';
    $tugas = (int) trim(fgets(STDIN));


    echo "\n". 'Masukan Nilai UTS : ';
    $uts = (int) trim(fgets(STDIN));


    echo "\n". 'Masukan Nilai UAS : ';
    $uas = (int) trim(fgets(STDIN));

    echo "\n". '----------------------'. "\n";

    $nilai_tugas = ($tugas * 0.3);
    $nilai_uts = ($uts * 0.3);
    $nilai_uas = ($uas * 0.4);
    $nilai_akhir = ($nilai_tugas) + ($nilai_uts) + ($nilai_uas);


    switch (true) {
        case ($nilai_akhir >=80 && $nilai_akhir <=100):
            $predikat = 'Mendapat Predikat: A';
            break;

        case ($nilai_akhir >=70 && $nilai_akhir <80):
            $predikat = 'Mendapat Predikat: B';
            break;

        case ($nilai_akhir >=60 && $nilai_akhir <70):
            $predikat = 'Mendapat Predikat: C';
            break;

        case ($nilai_akhir <70):
            $predikat = 'Tidak Lusus';
            break;
    };

    echo 'Nilai Kamu: '.$nilai_akhir. "\n";
    echo 'Kamu: '.$predikat. "\n";


    echo 'Ingin melakukan perhitungan lagi? (y/n)';
    $ulang = trim (fgets(STDIN));


} while ($ulang == 'y');


echo 'Program Selesai';
?>