<?php
// Masukkan NRP Anda di sini
$nrp = "2210191043";  // Ganti dengan NRP Anda

// Mengambil tiga digit terakhir NRP
$last_three_digits = (int) substr($nrp, -3);

// Menentukan kategori berdasarkan tiga digit terakhir NRP modulo 5
$category_code = $last_three_digits % 5;
$data = [];

// Memilih data berdasarkan kategori yang dihitung dari NRP
switch ($category_code) {
    case 1:
        // Kategori 1: Budaya Daerah di Indonesia
        $data = [
            [
                "name" => "Tari Saman",
                "description" => "Tari tradisional dari Aceh.",
                "year" => 1973,
                "origin" => "Aceh",
                "image_url" => "images/tari_saman.jpg"
            ],
            // Tambahkan data lain untuk kategori ini
        ];
        break;

    case 2:
        // Kategori 2: Penemu terkenal di dunia
        $data = [
            [
                "name" => "Thomas Edison",
                "description" => "Penemu bola lampu.",
                "year" => 1879,
                "origin" => "Amerika Serikat",
                "image_url" => "images/edison.jpg"
            ],
            // Tambahkan data lain untuk kategori ini
        ];
        break;

    case 3:
        // Kategori 3: Flora dan Fauna terancam punah
        $data = [
            [
                "name" => "Harimau Sumatra",
                "description" => "Salah satu spesies harimau yang terancam punah.",
                "year" => 2023,
                "origin" => "Sumatra",
                "image_url" => "images/harimau_sumatra.jpg"
            ],
            // Tambahkan data lain untuk kategori ini
        ];
        break;

    case 4:
        // Kategori 4: Pahlawan Nasional Indonesia
        $data = [
            [
                "name" => "Ir. Soekarno",
                "description" => "Proklamator kemerdekaan Indonesia.",
                "year" => 1945,
                "origin" => "Blitar, Jawa Timur",
                "image_url" => "images/soekarno.jpg"
            ],
            // Tambahkan data lain untuk kategori ini
        ];
        break;

    case 0:
        // Kategori 0: Perusahaan Teknologi
        $data = [
            [
                "name" => "Apple Inc.",
                "description" => "Perusahaan teknologi terkenal dengan produk iPhone.",
                "year" => 1976,
                "origin" => "Amerika Serikat",
                "image_url" => "images/apple.jpg"
            ],
            // Tambahkan data lain untuk kategori ini
        ];
        break;
}

// Tampilkan data dalam bentuk tabel HTML
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Tahun</th>
        <th>Asal Daerah</th>
        <th>Gambar</th>
      </tr>";

foreach ($data as $item) {
    echo "<tr>";
    echo "<td>{$item['name']}</td>";
    echo "<td>{$item['description']}</td>";
    echo "<td>{$item['year']}</td>";
    echo "<td>{$item['origin']}</td>";
    echo "<td><img src='{$item['image_url']}' width='100'></td>";
    echo "</tr>";
}

echo "</table>";
?>