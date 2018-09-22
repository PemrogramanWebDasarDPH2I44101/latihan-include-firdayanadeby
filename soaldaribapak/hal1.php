<?php
session_start();
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$akses = $_POST['akses'];
	$_SESSION['nama'] = $nama;
	$_SESSION['akses'] = $akses;
	$_SESSION['iduser'] = $iduser;
//print_r($_SESSION);
}
include 'coba2.html';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="hal2.php">hal2</a>
	<a href="hal3.php">hal3</a>
</body>
</html>