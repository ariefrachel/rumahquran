<?php
include('../db/config.php');
include('../includes/includes.php');
include('../header/header.php');

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$id = $_GET['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
	
$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){
    $query = "SELECT * FROM produk WHERE id='".$id."'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);

    if(is_file("images/".$data['foto']))
        unlink("images/".$data['foto']);
    
    $query = "UPDATE produk SET foto='".$fotobaru."', nama='".$nama."', deskripsi='".$deskripsi."' WHERE id='".$id."'";
    $sql = mysqli_query($koneksi, $query);

    if($sql){
        header("location: read.php");
    }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='read.php'>Kembali Ke Form</a>";
    }
}else{
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='read.php'>Kembali Ke Form</a>";
}

?>