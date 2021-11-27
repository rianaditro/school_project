<?php
	$koneksi = mysqli_connect('localhost', 'root', '', 'weblanjut');

	if (!$koneksi) {
		echo "Berhasil Terhubung ke Database !";
	}
?>