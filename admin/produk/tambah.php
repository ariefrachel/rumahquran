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
    <title>Tambah Produk</title>
    <style>
    .container {
        width: 60%;
        position: absolute;
        top: 20%;
        left: 30%;
    }

    .save {
        background: #FF9B25;
        color: #fff
    }

    .upload {
        border: 2px solid #FF9B25;
        color: #333;
        background: none;
        padding: 1em;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tambah Produk</h2>
        <form method="post" action="save.php" enctype="multipart/form-data">
            <input type="file" name="foto" class="form"><br><br>
            <input type="text" name="nama"><br><br>
            <textarea name="deskripsi" cols="30" rows="10"></textarea>
            <hr>
            <input type="submit" value="Simpan" class="btn">
            <a href="read.php"><input type="button" value="Batal" class="btn"></a>
        </form>
    </div>
</body>

</html>