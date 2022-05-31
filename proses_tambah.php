<?php
include("conect.php");

if (isset($_POST['daftar'])){

	$Nama = $_POST['Nama'];
	$Alamat = $_POST['Alamat'];
	$No_Telp= $_POST['No_Telp'];
	$Jk = $_POST['Jk'];
	$Kodepos = $_POST['Kodepos'];

	mysqli_query($db, "INSERT INTO identitas VALUES ('' , '$Nama', '$Alamat' ,'$No_Telp', '$Jk', '$Kodepos')");
	//mengalihkan halaman kembali ke index.php
	header('location:index.php');
}
