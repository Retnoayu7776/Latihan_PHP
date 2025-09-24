<?php
// 1. Login Mahasiswa
echo "<h3>1. Login Mahasiswa</h3>";
$username = "mahasiswa";
$password = "kuliah123";

if ($username == "mahasiswa" && $password == "kuliah123")
    echo "Login berhasil, Selamat datang di Sistem Akademik!";
else
    echo "Login gagal, periksa username atau password Anda.";

echo "<hr>";


// 2. Status Kelulusan Nilai Mata Kuliah
echo "<h3>2. Status Kelulusan Nilai Mata Kuliah</h3>";
$nilai = 68;

if ($nilai >= 70)
    echo "Nilai Anda $nilai, Status: LULUS";
else
    echo "Nilai Anda $nilai, Status: TIDAK LULUS";

echo "<hr>";


// 3. Menentukan Kategori IPK
echo "<h3>3. Menentukan Kategori IPK</h3>";
$ipk = 3.45;

if ($ipk >= 3.5)
    echo "IPK: $ipk, Predikat: Dengan Pujian (Cumlaude)";
elseif ($ipk >= 3.0)
    echo "IPK: $ipk, Predikat: Sangat Memuaskan";
elseif ($ipk >= 2.5)
    echo "IPK: $ipk, Predikat: Memuaskan";
else
    echo "IPK: $ipk, Predikat: Perlu Perbaikan";

echo "<hr>";


// 4. Menentukan Hari Kuliah (Switch-Case)
echo "<h3>4. Menentukan Hari Kuliah</h3>";
$hari = 4;

switch ($hari) {
    case 1:
        echo "Senin: Mata Kuliah Pemrograman Web";
        break;
    case 2:
        echo "Selasa: Mata Kuliah Basis Data";
        break;
    case 3:
        echo "Rabu: Mata Kuliah Algoritma & Struktur Data";
        break;
    case 4:
        echo "Kamis: Mata Kuliah Sistem Operasi";
        break;
    case 5:
        echo "Jumat: Mata Kuliah Statistik";
        break;
    default:
        echo "Hari ini tidak ada kuliah.";
        break;
}

echo "<hr>";


// 5. Menentukan Syarat Ujian Akhir
echo "<h3>5. Menentukan Syarat Ujian Akhir</h3>";
$kehadiran = 80; // persen
$tugas = true;   // sudah mengumpulkan tugas

if ($kehadiran >= 75 && $tugas == true)
    echo "Anda memenuhi syarat untuk mengikuti Ujian Akhir Semester.";
else
    echo "Anda TIDAK memenuhi syarat UAS (cek kehadiran atau tugas).";

?>
