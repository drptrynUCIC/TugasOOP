<?php
include 'mahasiswa_class.php';

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $univ = $_POST['univ'];
    $prodi = $_POST['prodi'];
    $nilai = $_POST['nilai'];

    // Buat objek Mahasiswa baru
    $mahasiswa = new Mahasiswa($nim, $nama, $univ, $prodi, $nilai);

    // Tampilkan output
    echo "<div class='container'>";
    echo "<h2 class='info'>Data Mahasiswa</h2>";
    echo "<p><span class='info'>NIM:</span> " . $mahasiswa->nim . "</p>";
    echo "<p><span class='info'>Nama:</span> " . $mahasiswa->nama . "</p>";
    echo "<p><span class='info'>Universitas:</span> " . $mahasiswa->univ . "</p>";
    echo "<p><span class='info'>Program Studi:</span> " . $mahasiswa->prodi . "</p>";
    echo "<p><span class='info'>Nilai:</span> " . $mahasiswa->nilai . "</p>";
    echo "<p><span class='info'>Grade:</span> " . $mahasiswa->grade . "</p>";
    echo "<p><span class='info'>Predikat:</span> " . $mahasiswa->predikat . "</p>";
    echo "<p><span class='info'>Status:</span> " . $mahasiswa->status . "</p>";
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>

</html>