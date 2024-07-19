<?php

// Deklarasi array data mahasiswa
$mahasiswa = array(
    array(
        "nim" => "A1234567",
        "nama" => "Budi",
        "nilai_q1" => 80,
        "nilai_q2" => 75,
        "nilai_uts" => 85,
        "nilai_uas" => 90,
        "nilai_proyek" => 85,
    ),
    array(
        "nim" => "B2345678",
        "nama" => "Ani",
        "nilai_q1" => 70,
        "nilai_q2" => 65,
        "nilai_uts" => 75,
        "nilai_uas" => 80,
        "nilai_proyek" => 90,
    ),
    // Tambahkan data mahasiswa lain di sini
);

// Fungsi untuk menghitung nilai akhir
function hitungNilaiAkhir($nilaiQ1, $nilaiQ2, $nilaiUts, $nilaiUas, $nilaiProyek)
{
    $nilaiAkhir = (0.1 * $nilaiQ1) + (0.1 * $nilaiQ2) + (0.1 * $nilaiUts) + (0.2 * $nilaiUas) + (0.5 * $nilaiProyek);
    return $nilaiAkhir;
}

// Menampilkan dan mengecek status kelulusan untuk setiap mahasiswa
foreach ($mahasiswa as $dataMahasiswa) {
    $nim = $dataMahasiswa["nim"];
    $nama = $dataMahasiswa["nama"];
    $nilaiQ1 = $dataMahasiswa["nilai_q1"];
    $nilaiQ2 = $dataMahasiswa["nilai_q2"];
    $nilaiUts = $dataMahasiswa["nilai_uts"];
    $nilaiUas = $dataMahasiswa["nilai_uas"];
    $nilaiProyek = $dataMahasiswa["nilai_proyek"];

    $nilaiAkhir = hitungNilaiAkhir($nilaiQ1, $nilaiQ2, $nilaiUts, $nilaiUas, $nilaiProyek);

    echo "NIM: $nim</br>";
    echo "Nama: $nama</br>";
    echo "Nilai Q1: $nilaiQ1</br>";
    echo "Nilai Q2: $nilaiQ2</br>";
    echo "Nilai UTS: $nilaiUts</br>";
    echo "Nilai UAS: $nilaiUas</br>";
    echo "Nilai Proyek: $nilaiProyek</br>";
    echo "Nilai Akhir: $nilaiAkhir</br>";

    if ($nilaiAkhir >= 60) {
        echo "Status: Lulus</br>";
    } else {
        echo "Status: Tidak Lulus";
    }

    echo "</br>";
}
