<?php
	include "koneksi.php";
	if (isset($_GET['id_pinjam'])) {
		$id_pinjam	=$_GET['id_pinjam'];
	}
	else{
		echo "Oops! No ID Selected";
	}

	if (!empty($id_pinjam) && $id_pinjam != "") {
		$hapus =mysqli_query($conn, "DELETE FROM tb_perpus WHERE id_pinjam='$id_pinjam'");
			?>
<script language="JavaScript">
alert('Good! Delete data karyawan berhasil ...');
document.location = './';
</script>
<?php
	}
?>