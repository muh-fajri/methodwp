<?php
    include "connection.php";

/* HITUNG NILAI S */
    $w1 = mysqli_fetch_assoc($QKriteria);
    $w2 = mysqli_fetch_assoc($QKriteria);
    $w3 = mysqli_fetch_assoc($QKriteria);
    $w4 = mysqli_fetch_assoc($QKriteria);
    $w5 = mysqli_fetch_assoc($QKriteria);
    $w6 = mysqli_fetch_assoc($QKriteria);
    $w7 = mysqli_fetch_assoc($QKriteria);
    $w8 = mysqli_fetch_assoc($QKriteria);
    $w9 = mysqli_fetch_assoc($QKriteria);
    $w10 = mysqli_fetch_assoc($QKriteria);
    while($resQNS = mysqli_fetch_assoc($QNilai2)) :
            $s = pow($resQNS["k1"], $w1["w"])*pow($resQNS["k2"], $w2["w"])*pow($resQNS["k3"], $w3["w"])*
            pow($resQNS["k4"], $w4["w"])*pow($resQNS["k5"], $w5["w"])*pow($resQNS["k6"], $w6["w"])*
            pow($resQNS["k7"], $w7["w"])*pow($resQNS["k8"], $w8["w"])*pow($resQNS["k9"], $w9["w"])*
            pow($resQNS["k10"], $w10["w"]);
            echo $s;
            echo " ";
        $resQA = mysqli_fetch_assoc($QAlternatif);
        $alternatif = $resQA["nama"];
        mysqli_query($conn, "INSERT INTO tabel_s
        VALUES ('', '$s')");
    endwhile;

    header("location: ./index.php?target=hitunghasil");
?>