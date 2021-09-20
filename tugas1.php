<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>

<body>
    <form>
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>Alamat</label> <br>
            <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>
        <div>
            <label>Tanggal Lahir</label> <br>
            <input name="Tanggal" type="text" placeholder="Masukkan Tanggal Lahir">
        </div>
        <div>
            <button>Submit</button>
        </div>

    </form>

    <div style="text-align: center;">
        <?php
        $nama = @$_GET['nama'];
        $alamat = @$_GET['alamat'];
        $Tanggal = @$_GET['Tanggal'];
        if ($nama) {
            echo "<strong>Nama:</strong> {$nama} <br>";
        }

        if ($alamat) {
            echo "<strong>Alamat:</strong> {$alamat} <br>";
        }
        if ($Tanggal) {
            echo "<strong>Tanggal Lahir:</strong> {$Tanggal} <br>";
        }
        echo date('l, d-m-Y');

        echo "<br/>";

        echo date('d / M / y');

        echo "<br/>";

        echo date('D - M / Y');
        ?>
    </div>
</body>

</html>