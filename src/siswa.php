<?php
require("koneksi.php");
CLASS Siswa EXTENDS Database{
    PUBLIC FUNCTION tambahSiswa($id, $nis, $nama){
        $tambah = "INSERT INTO siswa (id, nis, nama)
                    VALUES ('$id', '$nis', '$nama')";
        $proses = $this->db->query($tambah);

        if(!$proses){
            return "GAGAL";
        }else{
            return "SUKSES";
        }
    }

    PUBLIC FUNCTION updateSiswa($id, $nis, $nama){
        $update = "UPDATE siswa SET nis='$nis', nama='$nama'
                    WHERE id='$id'";
        $proses = $this->db->query($update);
        
        if(!$proses){
            return "GAGAL";
        }else{
            return "SUKSES";
        }
    }

    PUBLIC FUNCTION editSiswa($id){
        $edit = "SELECT * FROM siswa WHERE id='$id'";
        $proses = $this->db->query($edit);
        return $proses;
    }

    PUBLIC FUNCTION hapusSiswa($id){
        $hapus = "DELETE FROM siswa WHERE id='$id'";
        $proses = $this->db->query($hapus);
        
        if(!$proses){
            return "GAGAL";
        }else{
            return "SUKSES";
        }
    }

    PUBLIC FUNCTION lihatSiswa(){
        $lihat = "SELECT * FROM siswa";
        $proses = $this->db->query($lihat);
        return $proses;
    }
}
?>