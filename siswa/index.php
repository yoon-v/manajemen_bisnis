<html>

<head>
    <title>CRUD</title>
</head>

<body>
    <h2 style="color:black;">Tampilan Data pinjam buku</h2>
    <p><a href="form-input.php">Tambah Data</a></p>
    <?php
	// menghubungkan dengan koneksi database
	include 'koneksi.php';

	// mengambil data karyawan dari database
	$data_karyawan = mysqli_query($koneksi,"SELECT * FROM tb_perpus");

	// menghitung data karyaawan yang ada
	$jumlah = mysqli_num_rows($data_karyawan);
	?>
    <h4>Jumlah data karyawan : <b><?php echo $jumlah; ?></b></h4>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Id pinjam</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No.Telp</th>
                <th>nama buku</th>
                <th>tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
				include "koneksi.php";
				$query	=mysqli_query($conn, "SELECT * FROM tb_perpus ORDER BY id_pinjam DESC");
				$no=0;
				while($data	=mysqli_fetch_array($query)){
				$no++
			?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['id_pinjam']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['telepon']; ?></td>
                <td><?php echo $data['nm_buku']; ?></td>
                <td><?php echo $data['tgl_kembali']; ?></td>
                <td>
                    <a href="form-edit.php?id_pinjam=<?php echo $data['id_pinjam']; ?>">Edit</a> |
                    <a href="hapus.php?id_pinjam=<?php echo $data['id_pinjam']; ?>">Delete</a>
                </td>
                <?php
				}
			?>
        </tbody>
    </table>


    <style>
    body {
        align-self: center;
        font-family: 'Roboto', sans-serif;
        color: black;
        background-color: white;
    }

    table {
        border-collapse: collapse;
    }

    button {
        background-color: wheat;
        box-shadow: black;
        color: white;
        padding: 20px 20px;
        margin: 40px 0;
        border: none;
        cursor: pointer;
        width: 10%;
        align-items: flex-end;
    }

    p,
    a {
        text-decoration: none;
    }

    td,
    a {
        color: black;
        padding: 10px;
    }

    table,
    th,
    td {
        border: 1px solid black;
        padding: 5px;
    }
    </style>
</body>

</html>