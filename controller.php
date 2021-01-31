<?php
	if (!isset($_GET['target'])){
		include "home.php";
	} else {
	$target=$_GET['target'];
	if ($target=="alternatif"){
		include "alternatif.php";
	} elseif ($target=="kriteria"){
		include "kriteria.php";
	} elseif ($target=="nilai"){
		include "nilai.php";
	} elseif ($target=="hitunghasil"){
		include "hitunghasil.php";
	} else {
		include "home.php";
	}
}
?>