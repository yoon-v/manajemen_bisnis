<?php
	include "koneksi.php";
	if ($_POST['Submit'] == "Submit") {
	$id_karyawan	=$_POST['id_karyawan'];
	$nama		=$_POST['nama'];
	$alamat		=$_POST['alamat'];
	$telepon	=$_POST['telepon'];
	$tgl_lahir	=$_POST['nm_buku'];
	$gaji		=$_POST['tgl_kembali'];

	$ceknama	=mysqli_num_rows (mysqli_query($conn, "SELECT nama FROM tb_perpus WHERE nama='$_POST[nama]'"));

	if($ceknama > 0) {
	?>
<script language="JavaScript">
alert('Oops! Duplikat nama ...');
document.location = 'form-input.php';
</script>
<?php
	}
	else{
		$insert =mysqli_query($conn, "INSERT INTO tb_perpus (id_pinjam, nama, alamat, telepon, nm_buku, tgl_kembali) VALUES ('$id_pinjam','$nama', '$alamat', '$telepon', '$nm_buku', '$tgl_kembali')");
		?>
<script language="JavaScript">
alert('Good! Input Data Karyawan Berhasil ...');
document.location = './';
</script>
<?php
		}
	}
?>