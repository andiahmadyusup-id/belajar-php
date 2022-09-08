
<form action="rumus-persegi.php" method="POST">
    <h1>Rumus Luas dan Keliling Persegi</h1>
    <p>Sisi :</p>

    <input class="input" type="number" name="sisi" placeholder="Ex . 5">
    <input class="btn" type="submit" name="proses" value="Hitung Luas & Keliling">

</form>
<?php
if(isset($_POST["proses"])){
    echo "<hr>";
    $sisi = $_POST["sisi"];
   
    $luas = $sisi *  $sisi;
    $keliling = 4 * $sisi;


    echo "<div>Sisi : $sisi <br></div>";
 echo "<div><span>Luas Persegi : $luas </span><br></div>";
 echo "<div><span>Keliling Persegi : $keliling </span><br></div>";

}
?>
<div class="value"></div>