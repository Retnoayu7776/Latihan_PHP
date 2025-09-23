<?php
echo "<h3>1. Apakah string angka bisa dihitung?</h3>";
$angka1 = "15"; // string numerik
$angka2 = "25"; // string numerik
$total = $angka1 + $angka2;
echo "angka1 = \"$angka1\" (string), angka2 = \"$angka2\" (string)<br>";
echo "Jika dijumlahkan: $angka1 + $angka2 = $total (karena dikonversi ke integer)<br><br>";

echo "<h3>2. Bedanya operator / dan %</h3>";
$p = 17;
$q = 4;
echo "Hasil $p / $q = " . ($p / $q) . " (hasil pembagian)<br>";
echo "Hasil $p % $q = " . ($p % $q) . " (sisa pembagian)<br><br>";

echo "<h3>3. Menggabungkan string menjadi 9080</h3>";
$nilai1 = "90";
$nilai2 = "80";
$gabungan = $nilai1 . $nilai2; // gunakan titik (.)
echo "nilai1 = $nilai1<br>";
echo "nilai2 = $nilai2<br>";
echo "Setelah digabung dengan operator titik (.) = $gabungan<br><br>";

echo "<h3>4. Perbedaan Single Quoted dan Double Quoted</h3>";
$teks1 = 'Belajar PHP itu menyenangkan';
$teks2 = 'Baris pertama
Baris kedua
Baris ketiga';
$teks3 = 'Ali berkata: "Saya akan kembali"';
$teks4 = 'Lokasi file ada di C:\\xampp\\htdocs';
$teks5 = 'Kalimat ini tidak benar-benar pindah ke baris baru: \n contoh';
$teks6 = 'Isi variabel tidak ditampilkan di sini: $nilai1 dan $nilai2';

echo "Contoh dengan Single Quoted:<br>";
echo $teks1 . "<br>";
echo $teks2 . "<br>";
echo $teks3 . "<br>";
echo $teks4 . "<br>";
echo $teks5 . "<br>";
echo $teks6 . "<br><br>";

echo "Contoh dengan Double Quoted:<br>";
$teks7 = "Kalimat ini menggunakan karakter escape:\\nMaka akan pindah baris";
$teks8 = "Isi variabel nilai1 = $nilai1 dan nilai2 = $nilai2 akan otomatis ditampilkan";
echo nl2br($teks7) . "<br>"; // nl2br agar \n terlihat pindah baris di HTML
echo $teks8 . "<br>";
?>
