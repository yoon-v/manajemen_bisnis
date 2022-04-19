<?php
	$conn = mysqli_connect("localhost", "root", "", "quis_nurmayasari");
	if (mysqli_connect_errno()){
		echo "Oops! Koneksi database gagal : --> " . mysqli_connect_error();
	}
	$koneksi = mysqli_connect('localhost','root','','quis_nurmayasari');
?>
