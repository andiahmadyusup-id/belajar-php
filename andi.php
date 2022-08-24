<?php
    echo" 
    <marquee>
        <h1> Andi Ahmad Yusup - Pelajar SMKN 1 Subang </h1>
    </marquee>
    ";
    
    //Variable
    $nama = "Andi Ahmad Yusup";
    $kelas = "XI RPL 2";
    $nilai = 99.99;

    echo "Nama : " . $nama ;
    echo "<br>";
    echo "Kelas : " . $kelas ;
    echo "<br>";
    echo "Nilai : $nilai";
    echo "<br><br>";

    //Operator Jumlah
    $angka1 = 5;
    $angka2 = 10;

    $hasil = $angka1 + $angka2;
    echo "Hasil dari penjumlahan : $hasil";
    echo "<br><br>";

    // Rumus Luas Segitiga
    $alas = 8;
    $tinggi = 20 ;

    $rumus = 0.5 * $alas * $tinggi;
    echo "Hasil Rumus : $rumus";
    echo "<br><br>";


    // Rumus Luas Lingkaran 
    $phi1 = 3.14;
    $phi2 = 22/7;
    $r = 7;

    if ($r %7 == 0){
        $hasil = $phi2 * $r *$r ;
        echo "Hasil Luas Lingkaran : $hasil";
    } else {
        $hasil = $r *$r * $phi1;
        echo "Hasil Luas Lingkaran :" . round($hasil);
    }
    echo "<br><br>";

    // Rumus Volume Balok
    $p = 10;
    $l = 5;
    $t = 10;

    $volume = $p * $l * $t;
    echo "Hasil Volume Balok : $volume";



   


?>
