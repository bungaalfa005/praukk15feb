<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['nama_penyewa'];
    $alamat=$_POST['alamat'];
    $genre=$_POST['genre'];
    $judul=$_POST['judul'];
    $tahun=$_POST['tahun'];
    $tanggal_sewa=$_POST['tanggal_sewa'];
    $tanggal_kembali=$_POST['tanggal_kembali'];
    $harga=$_POST['harga'];

    $sql="INSERT INTO tb_dvd(genre_film, judul_film, tahun_film, tanggal_sewa, tanggal_kembali, harga)
    VALUES ('$genre', '$judul', '$tahun', '$tanggal_sewa', '$tanggal_kembali', '$harga')";
    $query=mysqli_query($koneksi, $sql);

    $sql="SELECT max(id_dvd)AS dvd_id FROM tb_dvd LIMIT 1";
    $query=mysqli_query($koneksi, $sql);

    $data=mysqli_fetch_array($query);
    $dvd_id=$data['dvd_id'];

    $sql="INSERT INTO tb_penyewa(nama_penyewa,alamat,id_dvd) VALUES ('$nama','$alamat','$dvd_id' )";
    $query=mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    }else{
        header('location:tampil.php?status=gagal');
    }

}
?>