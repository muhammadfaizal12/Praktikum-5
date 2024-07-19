<?php

// Deklarasi variabel dengan tipe data yang sesuai
$namaProduk = array("Laptop", "Keyboard", "Mouse");
$jumlahProduk = array(2, 3, 1);
$hargaPerProduk = array(8000000, 300000, 150000);
$statusKetersediaan = array("Tersedia", "Habis", "Tersedia");

// Menghitung total nilai inventaris
$totalNilaiInventaris = 0;
for ($i = 0; $i < count($namaProduk); $i++) {
    $totalNilaiInventaris += $jumlahProduk[$i] * $hargaPerProduk[$i];
}

// Menampilkan laporan inventaris
echo "=== Laporan Inventaris === ";
echo "-------------------------</br>";
for ($i = 0; $i < count($namaProduk); $i++) {
    echo "Nama Produk: " . $namaProduk[$i] . "</br>";
    echo "Jumlah: " . $jumlahProduk[$i] . "</br>";
    echo "Harga Per Produk: Rp" . number_format($hargaPerProduk[$i], 0, ",", ".") . "</br>";
    echo "Total Nilai: Rp" . number_format($jumlahProduk[$i] * $hargaPerProduk[$i], 0, ",", ".") . "</br>";
    echo "Status: " . $statusKetersediaan[$i] . "</br>";
    echo "-------------------------</br>";
}

echo "Total Nilai Inventaris: Rp" . number_format($totalNilaiInventaris, 0, ",", ".") . "</br>";
