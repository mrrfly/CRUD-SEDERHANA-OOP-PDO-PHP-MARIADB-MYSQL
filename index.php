<?php require("siswa.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Siswa</title>
</head>
<body>

<h1><a href="tambah-siswa.php">TAMBAH SISWA</a></h1>
<table border="1">

    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>MENU</th>
        </tr>
    </thead>

    <?php
    $Siswa = NEW Siswa();
    $no = 1;
    $lihat = $Siswa->lihatSiswa();
    while ($data = $lihat->FETCH(PDO::FETCH_OBJ)){
    ?>

    <tbody>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $data->nis ?></td>
            <td><?= $data->nama ?></td>
            <td>
                <a href="edit-siswa.php?id=<?= $data->id ?>">EDIT</a>
                ||
                <a href="index.php?hapus=<?= $data->id ?>">HAPUS</a>
            </td>
        </tr>
    </tbody>
    <?php $no++;} ?>
</table>
    
</body>
</html>
<?php
if(ISSET($_GET['hapus'])){
    $Siswa = NEW Siswa();
    $hapus = $Siswa->hapusSiswa($_GET['hapus']);
    if($hapus == "SUKSES"){
        header("Location: index.php");
    }
}
?>