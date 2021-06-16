<?php
include('../db/config.php');
include('../includes/includes.php');


$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];

$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query = "INSERT INTO produk VALUES('".$id."','".$fotobaru."', '".$nama."', '".$deskripsi."')";
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: read.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
}

?>