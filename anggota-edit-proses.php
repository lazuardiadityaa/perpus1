<?php
     $nis            = $_POST['nis'];
     $nama           = $_POST['nama'];
     $jenis_kelamin  = $_POST['jk'];
     $tempat_lahir   = $_POST['tempat_lahir'];
     $tanggal_lahir  = $_POST['tanggal_lahir'];
     $kelas          = $_POST['id_kelas'];
     $jurusan        = $_POST['id_jurusan'];
     $no_telepon     = $_POST['nomor_telepon'];
     $alamat         = $_POST['alamat'];
    $query_update = mysqli_query($koneksi,"UPDATE anggota SET nis = '$nis', 
             nama = '$nama',
             jk = '$jenis_kelamin',
             tempat_lahir = '$tempat_lahir', 
             tanggal_lahir = '$tanggal_lahir', 
             id_kelas = '$kelas', 
             id_jurusan = '$jurusan', 
             nomor_telepon = '$tlp', 
             alamat = '$alamat'
            WHERE id_anggota = '$id_anggota'");

if($query_update)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Diupdate !!!
            </div>
        <?php
        header('refresh:2; URL=http://localhost/17_mywebsite_12RPL2/admin.php?page=anggota');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Diupdate !!!!!!!!!
            </div>
        <?php
    }

////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>