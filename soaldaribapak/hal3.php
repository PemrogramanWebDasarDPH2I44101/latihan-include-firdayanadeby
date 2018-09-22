<?php
session_start();
$nama = $_SESSION["nama"];
$akses = $_SESSION["akses"];

//print_r($_SESSION);
include 'coba2.html';
if ($akses == "admin") {
	echo "halaman boleh diakses, hai $nama";
}else{
	header("location: form.html");
}

?>