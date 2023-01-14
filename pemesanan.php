<?php
//koneksi ke database
require 'db/function.php';



$users = query("SELECT * FROM peminjaman");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM peminjaman  ". $id;

    
}



?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($users as $row): ?>
        <ul>
            <li>
                <?= $row["username"];?>
            </li>
            <li>
                <?= $row["waktu_peminjaman"];?>
            </li>
            <li>
                <?= $row["ps"];?>
            </li>
            <li>
                <?= $row["harga"];?>
            </li>
        </ul>
    <?php endforeach; ?>

</html>