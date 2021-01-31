<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK - Method WP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Uji SPK - Metode WP</h1>
    </header>
    <main>
        <aside>
            <a href="index.php?target=home">Home</a>
            <a href="index.php?target=alternatif">Alternatif</a>
            <a href="index.php?target=kriteria">Kriteria</a>
            <a href="index.php?target=nilai">Nilai</a>
            <a href="index.php?target=hitunghasil">Hitung Hasil</a>
        </aside>
        <article>
            <?php include 'controller.php' ?>
        </article>
    </main>
    <footer>
        <p>Credit @2021 - Muhammad Fajri</p>
    </footer>
</body>
</html>