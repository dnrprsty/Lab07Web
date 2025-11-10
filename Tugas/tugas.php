<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas PHP</title>
</head>
<body>
<h2>Form Data Diri</h2>
<form method="post">
    Nama: <input type="text" name="nama"><br><br>
    Tanggal Lahir: <input type="date" name="tgl_lahir"><br><br>
    Pekerjaan:
    <select name="pekerjaan">
        <option value="Programmer">Programmer</option>
        <option value="Designer">Designer</option>
        <option value="Manager">Manager</option>
    </select><br><br>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    $umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;

    if ($pekerjaan == "Programmer") $gaji = 10000000;
    elseif ($pekerjaan == "Designer") $gaji = 8000000;
    else $gaji = 15000000;

    echo "<hr>";
    echo "Nama: $nama<br>";
    echo "Tanggal Lahir: $tgl_lahir<br>";
    echo "Umur: $umur tahun<br>";
    echo "Pekerjaan: $pekerjaan<br>";
    echo "Gaji: Rp. " . number_format($gaji, 0, ',', '.');
}
?>
</body>
</html>
