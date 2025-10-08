<?php
// Array 2 dimensi: [Nama, Harga, Stok]
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai stok * harga untuk semua buah
$totalNilai = 0;

foreach ($buah as $data) {
    $nama = $data[0];
    $harga = $data[1];
    $stok = $data[2];
    $nilai = $harga * $stok;
    $totalNilai += $nilai;

    echo "Buah: $nama<br>";
    echo "Harga: $harga<br>";
    echo "Stok: $stok<br>";
    echo "Total Nilai: $nilai<br><br>";
}

echo "Total nilai seluruh buah: " . $totalNilai;
?>
