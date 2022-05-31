<?php

include "conect.php";

$id = $_GET['id'];
$data = mysqli_query($db, "SELECT * FROM identitas WHERE no_identitas='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Belajar PHP | Edit Data</title>
    </head>

    <body>
        <header>
            <h3>Edit Identitas</h3>
        </header>

        <form action="proses_edit.php" method="POST">

            <fieldset>
                <input type="hidden" name="no_Identitas" value="<?php echo $d['no_Identitas']; ?>" />
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="Nama" placeholder="nama lengkap" value="<?php echo $d['Nama']; ?>" />
                </p>
                <p>
                    <label for="Alamat">Alamat: </label>
                    <textarea name="Alamat"><?php echo $d['Alamat'] ?></textarea>
                </p>
                <p>
                    <label for="No_Telp">Nomor HP: </label>
                    <textarea name="No_Telp"><?php echo $d['No_Telp'] ?></textarea>
                </p>
                <p>
                    <label for="Jk">Jenis Kelamin: </label>
                    <?php $jk = $d['Jk']; ?>
                    <label><input type="radio" name="Jk" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                    <label><input type="radio" name="Jk" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
                </p>
                <p>
                    <label for="Kodepos">Kodepos: </label>
                    <input type="text" name="Kodepos" placeholder="Kodepos" value="<?php echo $d['Kodepos'] ?>" />
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>

            </fieldset>


        </form>

    </body>
<?php } ?>

    </html>