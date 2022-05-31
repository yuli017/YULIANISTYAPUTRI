<?php
include("conect.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['no_Identitas'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $no_telp = $_POST['No_Telp'];
    $jk = $_POST['Jk'];
    $kodepos = $_POST['Kodepos'];

    $sql = "UPDATE `identitas` SET `Nama` = '$nama', `Alamat` = '$alamat', `No_Telp` = '$no_telp', `Jk` = '$jk', `Kodepos` = '$kodepos' WHERE `identitas`.`no_Identitas` = $id;";
    $query = mysqli_query($db, $sql);

    if ($query) {

        header('Location: index.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}