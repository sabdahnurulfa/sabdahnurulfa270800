<?php
if(isset($_POST['proses'])){
    $angka1 = $_POST['input1'];
    $angka2 = $_POST['input2'];
    $operator = $_POST['operator'];

    if ($operator == "tambah") {
        $hasil = $angka1 + $angka2;
        echo"
        Hasil : <br>
        $angka1 + $angka2 = $hasil";
    } 
    elseif($operator == "kurang") {
        $hasil = $angka1 - $angka2;
        echo"
        Hasil : <br>
        $angka1 - $angka2 = $hasil";
    } 
    elseif($operator == "kali") {
        $hasil = $angka1 * $angka2;
        echo"
        Hasil : <br>
        $angka1 x $angka2 = $hasil";
    }
    elseif($operator == "bagi") {
        $hasil = $angka1 / $angka2;
        echo"
        Hasil : <br>
        $angka1 / $angka2 = $hasil";
    } 
    else {
        echo "Anda belum memilih operator";
    }
}
?>