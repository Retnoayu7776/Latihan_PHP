<?php
echo "TUGAS FUNGSI<br><br>";

/* 1. Fungsi untuk menentukan bilangan terbesar dari 2 buah bilangan */
function terbesar($a, $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh pemanggilan fungsi
$bil1 = 100;
$bil2 = 150;
echo "1. Bilangan terbesar dari $bil1 dan $bil2 adalah: " . terbesar($bil1, $bil2);
echo "<br><br>";

/* 2. Tampilkan Tanggal, Bulan, dan Tahun sekarang dengan getdate() */
$sekarang = getdate();
echo "2. Tanggal sekarang (getdate) : " . $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"];
echo "<br><br>";

/* 3. Tampilkan Tanggal, Bulan, dan Tahun sekarang dengan fungsi date('d-F-Y') */
echo "3. Tanggal sekarang (date) : " . date("d-F-Y");
?>
