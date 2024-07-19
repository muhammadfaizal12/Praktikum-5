<?php

// Deklarasi variabel untuk panjang dan lebar persegi panjang
$panjang = 10; // Ubah nilai ini sesuai kebutuhan
$lebar = 5; // Ubah nilai ini sesuai kebutuhan

// Menghitung luas persegi panjang
$luas = $panjang * $lebar;

// Menghitung keliling persegi panjang
$keliling = 2 * ($panjang + $lebar);

// Menghitung panjang diagonal persegi panjang
$diagonal = sqrt($panjang * $panjang + $lebar * $lebar);

// Menampilkan hasil perhitungan
echo "Panjang: $panjang cm </br>";
echo "Lebar: $lebar cm </br>";
echo "Luas: $luas cm^2 </br>";
echo "Keliling: $keliling cm </br>";
echo "Diagonal: $diagonal cm </br>";
