<?php
// membuat koneksi
$koneksi = mysqli_connect("localhost", "root", "", "contoh");

// cek koneksi 
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "<script> alert('Sukses! Database terhubung'); </script>";

// query untuk insert data (uncomment to execute)
// $query = "INSERT INTO tamu VALUES(NULL, 'ainun', 'ainun@itg.ac.id')";
// mysqli_query($koneksi, $query);
?>
