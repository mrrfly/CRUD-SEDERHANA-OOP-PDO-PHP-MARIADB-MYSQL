<?php require("siswa.php") ?>

<form action="tambah-siswa.php" method="post">
    <input type="hidden" name="id">
    <input type="number" name="nis" placeholder="MASUKKAN NIS" require>
    <input type="text" name="nama" placeholder="MASUKKAN NAMA" require>
    <button type="submit" name="tambahSiswa">TAMBAH GAN</button>
</form>

<?php
if(ISSET($_POST['tambahSiswa'])){
$id = htmlspecialchars($_POST['id']);
$nis = htmlspecialchars($_POST['nis']);
$nama = htmlspecialchars($_POST['nama']);

$Siswa = NEW Siswa();
$tambah = $Siswa->tambahSiswa($id ,$nis, $nama);

if($tambah == "SUKSES"){
    header("Location: index.php");
}else{
    header("Location: tambah-siswa.php");
}
}
?>