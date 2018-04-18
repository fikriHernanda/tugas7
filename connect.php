<?php 

/* konfigurasi */
$user = 'USER';
$pass = 'rahasia';
$host = 'localhost';
$db = 'butel';

/* buat koneksi ke server mysql*/
$link = mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal dibuat";
	exit;
}
