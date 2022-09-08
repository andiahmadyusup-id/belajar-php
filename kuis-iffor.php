<?php
//Nama : Andi Ahmad Yusup
//Kelas : XI RPL 2


$star=10;
for( $a=$star;$a>0;$a--){
    for($i=1; $i<=$a; $i++){
       echo "&nbsp";
}
for($a1=$star;$a1>=$a;$a1--){
  echo"*";
}
  echo"<br>";
}
echo "<hr>";


for($a=$star;$a>0;$a--){
     for($b=$star;$b>=$a;$b--){
          echo "*";
      }
   echo "<br>";
}
echo "<hr>";

for($a=$star;$a>0;$a--){
    for($i=1; $i<=$a; $i++){
        echo " &nbsp";
    }
    for($a1=$star;$a1>=$a;$a1--){
        echo"*";
    }
echo"<br>";
}
echo "<hr>";

$star=10;
for($a=1; $a<=$star; $a++){
      for($b=1; $b<=$a; $b++){
           echo "&nbsp";
 }
      for($c=$star; $c>=$a; $c-=1){
            echo "*";
    }
    echo "<br>";
}
echo "<hr>";

for($a=1; $a<=$star; $a++){
    for($i=1; $i<=$a; $i++){
          echo " &nbsp";
     }
     for($c=$star; $c>=$a; $c-=1){
            echo "*";
     }
    echo "<br>";
}
echo "<hr>";


for($a=1; $a<=$star; $a++){
    for($c=$star; $c>=$a; $c-=1){
           echo "*";
    }
     echo "<br>";
}
echo "<hr>";

for($a=1; $a<=$star; $a++){
    for($b=$star; $b>=$a; $b-=1){
           echo "&nbsp";
    }
    for($c=1; $c<=$a; $c++){
           echo "*";
    }
          echo "<br>";
          }
          for($a=1; $a<=$star; $a++){
          for($b=1; $b<=$a; $b++){
               echo "&nbsp";
          }
          for($c=$star; $c>=$a; $c-=1){
               echo "*";
          }
   echo "<br>";
}
echo "<hr>";

for ($i=1; $i<=5; $i++){
    for ($j=$i; $j>=1; $j--){
        echo $j;
    }echo "<br>";
}
echo "<hr>";
$an = 7;
for ( $i = 1; $i <= $an; $i++){
    $j = 0;
    while( $j != ($an - $i)){
        echo "&nbsp&nbsp";
        $j++;
    }
    for ($k = 1; $k <= (2*$i) - 1; $k++){
        if($k ==1||$k == 2*$i - 1){
            echo $i;
        } else {
            echo "0";
        }
    }
    echo "<br>";
}

echo "<hr>";


$n = 1;
for( $a=$n;$a<10;$a++){
    for($i=10; $i>=$a; $i--){
       echo "&nbsp";
}
for($a1=$n;$a1<=$a;$a1++){
  echo $a;
}
  echo"<br>";
}
echo "<hr>";


for($a=1; $a<=$star; $a++){
    for($i=1; $i<=$a; $i++){
          echo " &nbsp";
     }
     for($c=$star; $c>=$a; $c--){
            echo $c;
     }
    echo "<br>";
}




echo "<hr>";




echo "<hr>";



