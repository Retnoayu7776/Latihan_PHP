<?php
class BukuView {
    public function tampilkan($bukuList) {
        echo "<h2>Daftar Buku Perpustakaan</h2>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>Judul</th><th>Pengarang</th><th>Tahun Terbit</th></tr>";

        foreach ($bukuList as $buku) {
            echo "<tr>";
            echo "<td>{$buku['judul']}</td>";
            echo "<td>{$buku['pengarang']}</td>";
            echo "<td>{$buku['tahun']}</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
}
?>
