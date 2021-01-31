<?php
$conn = mysqli_connect("localhost", "root", "", "wp");

$QAlternatif = mysqli_query($conn, "SELECT * FROM alternatif");

$QKriteria = mysqli_query($conn, "SELECT * FROM kriteria");

$QNilai = mysqli_query($conn, "SELECT * FROM nilai");

$QPilihAlternatif = mysqli_query($conn, "SELECT * FROM pilihalternatif");

$QSumAlternativeBobot = mysqli_query($conn, "SELECT SUM(bobot) AS bobot FROM kriteria");

$QSumS = mysqli_query($conn, "SELECT SUM(s) AS s FROM pilihalternatif");
?>