<?php
include('../db/config.php');
include('../includes/includes.php');
?>

<?php

$id = $_GET['id'];

$query = "SELECT * FROM produk WHERE id='".$id."'";
$sql = mysqli_query($koneksi, $query); 
$data = mysqli_fetch_array($sql);

if(is_file("images/".$data['foto']))
	unlink("images/".$data['foto']);


$query2 = "DELETE FROM produk WHERE id='".$id."'";
$sql2 = mysqli_query($koneksi, $query2);

if($sql2){ 
	header("location: read.php");
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>