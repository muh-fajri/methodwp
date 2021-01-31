<?php
    include "connection.php";

/* HITUNG NILAI S */

    $sumS = mysqli_fetch_assoc($QSumS);
    while($s = mysqli_fetch_assoc($QPilihAlternatif)) :
    $v = $s["s"]/$sumS["s"];
    echo $v;
    echo " | ";
    
    mysqli_query($conn, "INSERT INTO tabel_v
        VALUES ('', '$v')");
endwhile;

    header("location: ./index.php?target=hitunghasil2");
?>