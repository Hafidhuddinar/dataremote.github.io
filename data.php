<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bulan1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
$perPage = 500;
$offset = ($currentPage - 1) * $perPage;

// Mengambil nama-nama tabel dari database
$sqlTables = "SHOW TABLES FROM $dbname";
$resultTables = $conn->query($sqlTables);
$tables = [];

if ($resultTables && $resultTables->num_rows > 0) {
    while ($row = $resultTables->fetch_assoc()) {
        $tables[] = $row['Tables_in_' . $dbname];
    }
}

$data = array();

// Periksa apakah pengguna sudah memilih tanggal
if (isset($_GET['tanggal'])) {
    $tanggal = $_GET['tanggal'];
    $tanggal = date('d.m.Y', strtotime($tanggal)); // Ubah format tanggal jika diperlukan

    foreach ($tables as $table) {
        $sql = "SELECT * FROM $table WHERE Date = '$tanggal' LIMIT $perPage OFFSET $offset";
        $result = $conn->query($sql);

        if ($result) {
            // Pengecekan jika query berhasil dieksekusi
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Tambahkan nama tabel sebagai key untuk setiap data
                    $no = $offset + 1;
                    $row['Tabel'] = $table;
                    $data[] = $row;
                }
            } else {
                echo "";
            }
        } else {
            echo "Error: " . $conn->error;
        }
    }
}


$conn->close();



?>
