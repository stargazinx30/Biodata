  
<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
   
   
    //query insert data ke dalam database
    $query = "INSERT INTO tbl_biodata (id, nama, alamat, tempat_lahir, tgl_lahir, agama)";

    //kondisi pengecekan apakah data berhasil dimasukkan atau tidak
    if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

    } else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

    }

?>