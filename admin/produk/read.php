<?php
include('../db/config.php');
include('../includes/includes.php');
include('../header/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba</title>
    <style>
    body {
        background: #f5f6f8;
    }

    #wrapper {
        width: 60%;
        position: absolute;
        top: 5%;
        left: 25%;
    }

    .container {
        width: 100%;
        background: #fff;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
        padding: 3em;
    }

    h2 {
        font-family: 'Playfair Display';
        font-weight: 600;
    }

    .p {
        margin-top: 1em;
        opacity: .7;
    }

    a {
        margin-top: 1em;
    }
    </style>
</head>

<body>
    <div id="wrapper">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h2>Produk Rumah Quran</h2>
                <a href="tambah.php" class="btn" style="color:#fff;background:#FF9B25;">Tambah Produk</a>
            </div>
            <br>
            <table class="table" width="100%">
                <tr>
                    <th>Foto</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php
            
            $query = "SELECT * FROM produk";
            $sql = mysqli_query($koneksi, $query);
            
            while($data = mysqli_fetch_array($sql)){
                echo "<tr>";
                echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
                echo "<td>".$data['nama']."</td>";
                echo "<td>".$data['deskripsi']."</td>";
                echo "<td><a href='formUpdate.php?id=".$data['id']."'>Ubah</a></td>";
                echo "<td><a href='delete.php?id=".$data['id']."'>Hapus</a></td>";
                echo "</tr>";
            }
            ?>
            </table>
        </div>
        <br><br>
    </div>

</body>

</html>