<?php
    include "connection.php";

    $krtName = $_POST['krtName'];
    $krtBobot = $_POST['krtBobot'];
    $krtBenefit = $_POST['krtBenefit'];

    $resSum = mysqli_fetch_assoc($QSumAlternativeBobot);
    $krtW = $krtBobot/$resSum["bobot"];

    mysqli_query($conn, "INSERT INTO kriteria VALUES ('', '$krtName', '$krtBobot', '$krtBenefit', '$krtW')");

    mysqli_query($conn, "");

    header("location: ./index.php?target=kriteria");
?>