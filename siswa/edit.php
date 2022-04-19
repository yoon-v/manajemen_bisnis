<?php
	include "koneksi.php";
	if (isset($_GET['id_pinjam'])) {
		$id_pinjam = $_GET['id_pinjam'];
	}
	else {
		die ("Error. ID Selected! ");
	}
	$query	=mysqli_query($conn, "SELECT * FROM tb_perpus WHERE id_pinjam='$id_pinjam'");
	$data	=mysqli_fetch_array($query);
	$notnama	=$data['nama'];

	if ($_POST['Edit'] == "Edit") {
	$nama		=$_POST['nama'];
	$alamat		=$_POST['alamat'];
	$telepon	=$_POST['telepon'];
	$tgl_lahir	=$_POST['nm_buku'];
	$gaji		=$_POST['tgl_kembali'];

	$ceknama	=mysqli_num_rows (mysqli_query($conn, "SELECT nama FROM tb_perpus WHERE nama='$_POST[nama]' AND nama!='$notnama'"));

	if($ceknama > 0) {
	?>
<script language="JavaScript">
alert('Oops! Duplikat NAMA ...');
document.location = 'form-edit.php?id_pinjam=<?=$id_pinjam?>';
</script>
<?php
	}
	else{
		$update =mysqli_query($conn, "UPDATE tb_perpus SET nama='$nama', alamat='$alamat', telepon='$telepon', nm_buku='$nm_buku', tgl_kembali='$tgl_kembali' WHERE id_pinjam='$id_pinjam'");
		?>
<script language="JavaScript">
alert('Good! Edit Data Karyawan <?=$notnama?> Berhasil ...');
document.location = './';
</script>
<?php
	}
}
?>