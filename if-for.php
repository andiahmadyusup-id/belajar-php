<?php
        //Percabangan (IF ELSE)
        $nilai = 75;
        echo "Nilai Kamu = $nilai <br>";
        echo "Maka Status Kamu = ";
        if ($nilai > 75){
            echo "Lulus Beneran";
        } else if($nilai == 75){
            echo "Lulus KKM";
        } else {
            echo "Tidak Lulus";
        }

        echo "<hr>";

        $nilai_web = 78;
        $nilai_pbo = 80;
        echo "Nilai WEB Kamu = $nilai_web <br>";
        echo "Nilai PBO Kamu = $nilai_pbo <br>";
        echo "Maka Kelulusan Kamu = ";

        if($nilai_web >= 80 AND $nilai_pbo >= 80){
            echo "Lulus Nilai Produktif";
        } else if ($nilai_web >= 80 OR $nilai_pbo >= 80) {
            echo "Lulus Nilai Produktif Salah Satu Mapel";
        }else{
            echo "Tidak Lulus Nilai Produktif";
        }

        echo "<hr>";
        //Perulangan (While, Do While, For)
        $i = 1;
        while($i < 5){
            echo "Hello World ! Ke - $i <br>";
            $i++; //Assigment
        }
        echo "<hr>";

        $no = 1;
        do{
            echo "Hallo dunia ! Ke - $no <br>";
            $no++;
        } while ($no <= 5);
        echo "<hr>";


        for ($nomor = 1; $nomor < 5; $nomor++){
            echo "Dir Due Daeng ! <br>";
        }
        echo "<hr>";

        //Praktikum IF Didalam FOR
        $angka = 1;
        for($angka; $angka <= 10; $angka++){
            if ( $angka % 2 ==0){
                echo $angka . " = Bilangan Genap <br>";
            } else{
                echo $angka . " = Bilangan Ganjil <br>"; 
            }
        }
        echo "<hr>";

        // pratikum FOR Didalam FOR
        echo "Case 2 = angka berulang <br>";
        $x = 1;
        for ($x; $x <= 10; $x++){
            for ($y = $x; $y <= 10; $y++){
                echo $y;
            }
            echo "<br>";
        
        }








?>