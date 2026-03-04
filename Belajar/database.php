<?php
$host = "localhost";
$port = "5432";
$dbname = "database_pepustakaan";
$user = "postgres";
$pass = "1";

try {
    // Buat koneksi ke PostgreSQL
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Jalankan query ambil semua data dari tabel buku
    $stmt = $pdo->query("SELECT * FROM data_peminjam");

    // Tampilkan hasil query
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID Buku: {$row['id']} | Nama: {$row['nama']} | Alamat: {$row['alamat']} | Umur: {$row['umur']}. \t";
    }

} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>