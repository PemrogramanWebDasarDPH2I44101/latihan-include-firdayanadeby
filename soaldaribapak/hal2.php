<?php
session_start();
$nama = $_SESSION["nama"];
$akses = $_SESSION["akses"];
$iduser = $_SESSION["iduser"];
//print_r($_SESSION);
include 'coba2.html';
if ($akses == "admin") {
	echo "<halaman boleh diakses, hai $nama</font>";
	if (isset($iduser)) {
		echo "<font size='15'> id user </font>".$iduser;
	}else {
		echo "<font size='15'> id user tidak ada</font>";
	}
}else{
	header("location: form.html");
}

?>