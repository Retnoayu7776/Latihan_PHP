<?php
// Array asosiatif multidimensi berisi 3 produk e-commerce
$produk = [
    [
        "nama" => "Gantungan Kunci Akrilik",
        "kategori" => "Aksesoris",
        "harga" => 8000,
        "rating" => 4.8
    ],
    [
        "nama" => "Tas Lipat Pastel",
        "kategori" => "Fashion",
        "harga" => 25000,
        "rating" => 4.6
    ],
    [
        "nama" => "Botol Minum Custom",
        "kategori" => "Lifestyle",
        "harga" => 20000,
        "rating" => 4.9
    ]
];

// Cetak produk dengan harga tertinggi
$hargaTertinggi = 0;
$produkTertinggi = "";

foreach ($produk as $item) {
    if ($item["harga"] > $hargaTertinggi) {
        $hargaTertinggi = $item["harga"];
        $produkTertinggi = $item["nama"];
    }
}

echo "Produk dengan harga tertinggi adalah: <b>$produkTertinggi</b> (Rp $hargaTertinggi)";
?>
