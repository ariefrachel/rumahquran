<?php
include('../db/config.php');
include('../includes/includes.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
    li a {
        transition: .3s;
    }

    li a:hover {
        background: #FF9B25;
        color: #333;
        text-decoration: none;
    }


    a {
        margin-top: 1em;
    }

    .sign-out {
        margin-top: 3em;
    }
    </style>
</head>

<body>
    <nav class="position-fixed" style="background: #333;" id="navigation" role="navigation">
        <ul>
            <li><a class="item" href="../home/home.php">Home</a></li>
            <li><a class="item" href="../about/read.php">Profil dan Sejarah</a></li>
            <li><a class="item" href="../gallery/read.php">Galeri</a></li>
            <li><a class="item" href="../contact/read.php">Kontak</a></li>
            <li><a class="item" href="../users/read.php">Daftar Admin</a></li>
            <a href="../login/logout.php" class="btn btn-danger ml-3 sign-out">Keluar</a>
        </ul>
    </nav>
</body>

</html>