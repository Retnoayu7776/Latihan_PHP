<?php
// Array 2 dimensi 3x3 berisi angka acak 1–9
$angka = [
    [1, 5, 9],
    [3, 7, 2],
    [8, 4, 6]
];

// Cetak array dalam bentuk matriks (tabel)
echo "<b>Matriks 3x3:</b><br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $angka[$i][$j] . " ";
    }
    echo "<br>";
}

// Hitung jumlah total semua elemen
$total = 0;
foreach ($angka as $baris) {
    foreach ($baris as $nilai) {
        $total += $nilai;
    }
}

echo "<br><b>Jumlah total semua elemen:</b> " . $total;
?>
