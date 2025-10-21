<?php
class Buku {
    private $dataBuku = [];

    public function __construct() {
        // Data contoh — bisa diganti database nanti
        $this->dataBuku = [
            ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
            ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya Ananta Toer", "tahun" => 1980],
            ["judul" => "Negeri 5 Menara", "pengarang" => "Ahmad Fuadi", "tahun" => 2009],
        ];
    }

    // Ambil semua data buku
    public function getAllBuku() {
        return $this->dataBuku;
    }
}
?>
