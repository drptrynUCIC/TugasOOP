<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // If form is submitted, include proces.php to display the result
    include 'proces.php';
} else {
    // If form is not submitted, include mahasiswa.php to display the form
    include 'mahasiswa.php';
}
?>

</html>