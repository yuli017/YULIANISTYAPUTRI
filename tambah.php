<!DOCTYPE html
<html>

<head>
	<tittle>Belajar PHP | Tambah Data Ideentitas</tittle>
</head>

<body>
	<header>
		<h3> Tambah Identitas</h3>
	</header>
	<form action="proses_tambah.php" method="POST">
		<fieldset>
		<p>
			<label for="Nama">Nama: </label>
			<input type="text" name="Nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for ="Alamat">Alamat: </label>
			<textarea name="Alamat"> </textarea>
		</p>
		<p>
			<label for="No_Telp">Nomor HP: </label>
			<textarea name="No_Telp"></textarea>
		</p>
			<label for="Jk">Jenis Kelamin: </label>
			<label><input type="radio" name="Jk" value="laki-laki"> Laki-laki</label>
				<label><input type="radio" name="Jk" value="perempuan"> perempuan </label>
			</p>
			<p>
				<label for="kodepos">Kodepos: </label>
				<input type="text" name="Kodepos" placeholder="kodepos" />
			</p>
			<p>
				<input type="submit" name="daftar" value="Daftar" />
			</p>
		</fieldset> 
		</form>
		
</body>
</html>