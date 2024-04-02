<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h2>Form Mahasiswa</h2>
        <form action="proces.php" method="post">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim">

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">

            <label for="univ">Universitas:</label>
            <select id="univ" name="univ">
                <option value="" disabled selected>Pilih Universitas</option>
                <option value="Universitas Bangkit Bersama">Universitas Bangkit Bersama</option>
                <option value="Universitas Maju Terus">Universitas Maju Terus</option>
                <option value="Universitas Pantang Mundur">Universitas Pantang Mundur</option>
            </select>

            <label for="prodi">Program Studi:</label>
            <select id="prodi" name="prodi">
                <option value="" disabled selected>Pilih Program Studi</option>
                <option value="TI">Teknik Informatika</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="KA">Komunikasi dan Multimedia</option>
                <option value="SI">Sistem Informasi</option>
            </select>

            <label for="nilai">Nilai:</label>
            <input type="text" id="nilai" name="nilai">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>