<?php
    include "connection.php";

    $altName = $_POST['altName'];

    mysqli_query($conn, "INSERT INTO alternatif VALUES ('', '$altName', '')");

    header("location: ./index.php?target=alternatif");
?>