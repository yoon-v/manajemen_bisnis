<?php
	if (isset($_GET['id_karyawan'])) {
		$id_karyawan = $_GET['id_karyawan'];
	}
	else {
		die ("Error. ID Selected! ");
	}
	include "koneksi.php";
	$query	=mysqli_query($conn, "SELECT * FROM tabel_karyawan WHERE id_karyawan='$id_karyawan'");
	$data	=mysqli_fetch_array($query);
?>
<html>

<head>
    <title>CRUD</title>
</head>

<body>
    <h4>FORM EDIT DATA SISWA</h4>
    <p><a href="./">&lt;&lt; Kembali</a></p>
    <form action="edit.php?id_pinjam=<?=$id_pinjam?>" method="POST">
        <table>
            <tr>
                <td width="100">NAMA</td>
                <td><input type="text" name="nama" maxlength="35" size="50" value="<?php echo $data['nama']?>" /></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat" maxlength="128" size="50" value="<?php echo $data['alamat']?>" />
                </td>
            </tr>
            <tr>
                <td>TELEPON</td>
                <td><input type="text" name="telepon" maxlength="128" size="50" value="<?php echo $data['telepon']?>" />
                </td>
            </tr>
            <tr>
                <td>NAMA BUKU</td>
                <td><input type="date" name="nm_buku" maxlength="16" size="50" value="<?php echo $data['nm_buku']?>" />
                </td>
            </tr>
            <tr>
                <td>TANGGAL KEMBALI</td>
                <td><input type="text" name="tgl_kembali" maxlength="255" cols="38"
                        value="<?php echo $data['tgl_kembali']?>" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Edit" value="Edit" />&nbsp;<input type="reset" value="Reset" /></td>
            </tr>
        </table>
    </form>
</body>

</html>
