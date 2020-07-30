<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Tamu Wisuda Ubsi</title>
</head>

<body>
    <div class="container">
        <div class="judul">
            <h3> Buku Tamu </h3>
        </div>
        <div class="judul2">
            <h1> Wisuda Ubsi</h1>
        </div>
        <div class="jeda">
            <h4>Menu</h4>
        </div>
        <div class="isi">
            <nav>
                <ul>
                    <li><a href="/pages/form-daftar.php"> Daftar Baru </a></li>
                    <li><a href="/pages/list-tamu.php"> Pendaftaran </a></li>
                </ul>
            </nav>
        </div>
        <?php if(isset($_GET['status'])): ?>
                <p>
                    <?php
                        if($_GET['status'] == 'sukses'){
                            echo "Pendaftaran Tamu baru berhasil!";
                        } else {
                            echo "Pendaftaran gagal!";
                        }
                    ?>
                </p>
            <?php endif; ?>
    </div>
</body>
<?php include('./inc/footer.php'); ?>
</html>