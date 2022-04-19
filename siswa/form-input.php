<html>

<head>
    <title>Quis Manajemen Basis Data</title>
</head>

<body>
    <h4>FORM INPUT DATA PINJAM BUKU</h4>
    <p><a href="./">&lt;&lt; Kembali</a></p>
    <form action="input.php" method="POST">
        <table>
            <tr>
                <td width="100">ID KARYAWAN</td>
                <td><input type="text" name="id_pinjam" maxlength="16" size="50" /></td>
            </tr>
            <tr>
                <td width="100">NAMA</td>
                <td><input type="text" name="nama" maxlength="30" size="50" /></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat" maxlength="128" size="50" /></td>
            </tr>
            <tr>
                <td>TELEPON</td>
                <td><input type="text" name="telepon" maxlength="128" size="50" /></td>
            </tr>
            <tr>
                <td>NAMA BUKU</td>
                <td><input type="date" name="nm_buku" maxlength="16" size="50" /></td>
            </tr>
            <tr>
                <td>TANGGAL KEMBALI</td>
                <td><input type="text" name="tgl_kembali" maxlength="255" cols="38"></input></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Submit" />&nbsp;<input type="reset" value="Reset" /></td>
            </tr>
        </table>
    </form>
</body>

</html>
