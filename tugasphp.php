<form action="" method="get">
    masukan angka pertama <input type="text" name="angka1" placeholder="masukan angka1">
    masukan angka kedua <input type="text" name="angka2" placeholder="masukan angka2">
    <input type="submit" name="jumlah">
</form>

<?php

    $angka1= $_GET['angka1'];
    $angka2= $_GET['angka2'];
    if($angka2 < $angka1){
        echo "<script> alert(\"Angka 2 harus lebih besar\")</script>";
    }
    else{
            for($i=1 ; $i<=$angka2 ; $i++){
            $hasil=  $angka1 + $i;
            echo " $angka1 + $i = $hasil </br>";
        }
    }
?>