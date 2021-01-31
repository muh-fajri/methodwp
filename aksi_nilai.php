<?php
    include "connection.php";

    $vluAlternatif = $_POST['vluAlternatif'];
    $k1 = $_POST['k1'];
    $k2 = $_POST['k2'];
    $k3 = $_POST['k3'];
    $k4 = $_POST['k4'];
    $k5 = $_POST['k5'];
    $k6 = $_POST['k6'];
    $k7 = $_POST['k7'];
    $k8 = $_POST['k8'];
    $k9 = $_POST['k9'];
    $k10 = $_POST['k10'];

    mysqli_query($conn, "INSERT INTO nilai
        VALUES ('', '$vluAlternatif', '$k1', '$k2', '$k3', '$k4', '$k5', '$k6', '$k7', '$k8', '$k9', '$k10')");
    
    header("location: ./index.php?target=nilai");
?>