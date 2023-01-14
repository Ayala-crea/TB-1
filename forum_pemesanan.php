<?php
require 'db/function.php';

if (isset($_POST["submit"])) {
    if (peminjaman ($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil dimasukkan');
            document.location.href= 'dashboard_user.html';
        </script>
        ";
    }
    else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'forum_input_data.php';
        </script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPATU</title>
    <link rel="icon" href="ps1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style_pemesanan.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="ps1.jpg" class="logo">
            <nav>
                <ul>
                    <li><a href="index.html">Log out</a></li>
                    <li><a href="forum_pemesanan.html">pemesanan</a></li>
                    <li><a href="tampilan.html">barang</a></li>
                </ul>
            </nav>
        </div>
        <div class="pesan">
            <form action="" method="post" enctype="multipart/form-data">
                <h1 class="pemesanan">Masukan data peminjaman</h1>
                <ul>
                    <li>
                        <label for="username">username :</label>
                        <input type="text" name="username" id="username" required>
                    </li>
                    <li>
                        <label for="waktu_peminjaman">waktu :</label>
                        <select class="user_type" name="waktu_peminjaman" id="waktu_peminjaman">
                            <option value="1jam">1 jam</option>
                            <option value="2jam">2 jam</option>
                            <option value="3jam">3 jam</option>
                            <option value="4jam">4 jam</option>
                            <option value="5jam">5 jam</option>
                         </select>
                    </li>
                    <li>
                        <label for="ps">playstasion :</label>
                        <input class="playstasion" type="text" name="ps" id="ps">
                    </li>
                    <li>
                        <label for="harga">Harga :</label>
                        <input class="harga" type="text" name="harga" id="harga">
                    </li>
                    <li>
                        <button type="submit" name="submit">Tambah Data</button>
                    </li>
                </ul>

            </form>

        </div>




</body>

</html>