<! DOCTYPE html>
<html>
<head>
	<title>Belajar PHP - Tampilkan Data Identitas</title>
</head>

<body>
	<a href="tambah.php"> + TAMBAH IDENTITAS</a>
	<br />
	<br />
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nomor Identitas</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Nomor HP</th>
			<th>Jenis Kelamin</th>
			<th>Kodepos</th>
			<th>Aksi</th>
		</tr>
		<?php
		include 'conect.php';
		$no = 1;
		$data = mysqli_query($db, "SELECT * FROM identitas");
		while ($d = mysqli_fetch_array($data)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['no_Identitas']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Alamat']; ?></td>
				<td><?php echo $d['No_Telp']; ?></td>
				<td><?php echo $d['Jk']; ?></td>
				<td><?php echo $d['Kodepos']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['no_Identitas']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['no_Identitas']; ?>">HAPUS</a>
				</td>

			</tr>
			<?php
			
		}
		?>
	</table>


</body>
</html>