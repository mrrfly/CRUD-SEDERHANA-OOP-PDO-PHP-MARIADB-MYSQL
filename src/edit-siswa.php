<?php
require("siswa.php");
if(ISSET($_GET['id'])){
    $Siswa = NEW Siswa();
    $edit = $Siswa->editSiswa($_GET['id']);
    $data = $edit->FETCH(PDO::FETCH_OBJ);
}
?>

<form action="edit-siswa.php" method="post">
    <input type="hidden" name="id" value="<?= $data->id ?>">
    <input type="number" name="nis" placeholder="MASUKKAN NIS" value="<?= $data->nis ?>">
    <input type="text" name="nama" placeholder="MASUKKAN NAMA" value="<?= $data->nama ?>">
    <button type="submit" name="update">UPDATE GAN</button>
</form>

<?php
if(ISSET($_POST['update'])){
    $id = htmlspecialchars($_POST['id']);
    $nis = htmlspecialchars($_POST['nis']);
    $nama = htmlspecialchars($_POST['nama']);

    $Siswa = NEW Siswa();
    $update = $Siswa->updateSiswa($id, $nis, $nama);

    if($update == "SUKSES"){
        header("Location: index.php");
    }else{
        header("Location: edit-siswa.php?GAGAL-BOS");
    }
}
?>