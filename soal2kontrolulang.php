<?php
// Data nama dan nilai beberapa mahasiswa
$mahasiswa = [
    ["nama" => "Retno", "nilai" => 85],
    ["nama" => "Ayu", "nilai" => 72],
    ["nama" => "Ambar", "nilai" => 58],
    ["nama" => "Sari", "nilai" => 45],
    ["nama" => "Budi", "nilai" => 30]
];

echo "<h2>Daftar Nilai Mahasiswa dan Grade</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>
        <tr>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>";

// Perulangan untuk menampilkan semua mahasiswa
foreach($mahasiswa as $mhs) {
    $nilai = $mhs["nilai"];
    $grade = "";

    if($nilai >= 80 && $nilai <= 100) {
        $grade = "A";
    } elseif($nilai >= 61 && $nilai <= 79) {
        $grade = "B";
    } elseif($nilai >= 51 && $nilai <= 60) {
        $grade = "C";
    } elseif($nilai >= 41 && $nilai <= 50) {
        $grade = "D";
    } elseif($nilai >= 0 && $nilai <= 40) {
        $grade = "E";
    } else {
        $grade = "Tidak valid";
    }

    echo "<tr>
            <td>".$mhs["nama"]."</td>
            <td>".$nilai."</td>
            <td>".$grade."</td>
          </tr>";
}

echo "</table>";
?>

<?php
echo "<h2>Jawaban Soal Nomor 2</h2>";
echo "<p>Logika perulangan dan kontrol banyak digunakan pada berbagai kasus di dunia pemrograman. Beberapa contohnya:</p>";

echo "<ul>";
echo "<li><b>Menentukan grade mahasiswa berdasarkan nilai</b>
        <ul>
            <li>Misalnya: 0–40 = E, 41–50 = D, 51–60 = C, 61–79 = B, 80–100 = A.</li>
            <li>Gunakan <code>if–else</code> (kontrol) untuk menentukan grade, dan perulangan untuk mengecek banyak mahasiswa sekaligus.</li>
        </ul>
      </li>";

echo "<li><b>Membatasi percobaan login</b>
        <ul>
            <li>Misalnya: user hanya boleh mencoba <b>3 kali</b> login. Jika salah terus, akun terkunci.</li>
            <li>Gunakan perulangan untuk membatasi percobaan dan <code>if</code> untuk cek benar/salah.</li>
        </ul>
      </li>";

echo "<li><b>Menampilkan data dari database</b>
        <ul>
            <li>Misalnya: daftar produk di toko online, daftar mahasiswa dalam kelas, daftar nilai ujian.</li>
            <li>Gunakan perulangan <code>foreach</code> atau <code>while</code> untuk menampilkan semua data.</li>
        </ul>
      </li>";

echo "<li><b>Menghitung deret dan faktorial</b>
        <ul>
            <li>Misalnya: menghitung faktorial <b>5! = 1×2×3×4×5</b> menggunakan perulangan.</li>
            <li>Atau menghitung deret bilangan genap dari 2 sampai 100.</li>
        </ul>
      </li>";

echo "<li><b>Membuat menu aplikasi interaktif</b>
        <ul>
            <li>Misalnya: menu aplikasi yang menampilkan pilihan (1. Lihat data, 2. Tambah data, 3. Keluar).</li>
            <li>Menu akan terus berulang muncul sampai user memilih <b>Keluar</b>.</li>
        </ul>
      </li>";
echo "</ul>";
?>
