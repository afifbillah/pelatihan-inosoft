<?php
// Tes : [Task B #6]_Pengenalan PHP Dasar
function luas_lingkaran($jari_jari) {
    return round(3.14 * pow($jari_jari, 2), 2);
}

function keliling_lingkaran($jari_jari) {
    return round(2 * 3.14 * $jari_jari, 2);
}

function luas_persegi($panjang, $lebar) {
    return round($panjang * $lebar, 2);
}

for ($angka = 1; $angka <= 100; $angka++) {
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        $hasil = luas_persegi($angka / 3, $angka / 5);
    } elseif ($angka % 3 == 0) {
        $hasil = luas_lingkaran($angka / 3);
    } elseif ($angka % 5 == 0) {
        $hasil = keliling_lingkaran($angka / 5);
    } else {
        $hasil = round($angka, 2);
    }

    echo $hasil . PHP_EOL;
}

?>