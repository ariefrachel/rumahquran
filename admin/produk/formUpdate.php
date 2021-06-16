<?php
include('../db/config.php');
include('../includes/includes.php');

?>

<html>

<head>
    <title>Ubah Produk</title>
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
        <h2>Ubah Produk</h2>

        <?php

            $id = $_GET['id'];

            $query = "SELECT * FROM produk WHERE id='".$id."'";
            $sql = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_array($sql);
        ?>

        <form method="post" action="update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
            <input type="file" name="foto" class="upload"><br>
            <input type="text" name="nama" value="<?php echo $data['nama'];?>"><br>
            <textarea name="deskripsi" cols="30" rows="10"><?php echo $data['deskripsi'];?></textarea>
            <hr>
            <input type="submit" value="Ubah" class="btn save">
            <a style="margin-left:12px;" href="read.php"><input type="button" class="btn" value="Batal"></a>
        </form>
    </div>

</body>

</html>