<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Tamu Wisuda Ubsi</title>
</head>

<body>
    <div class="container">
        <div class="judul">
            <h3> Pendaftaran Tamu Baru </h3>
            <h1> Wisuda Ubsi</h1>
        </div>
        <div>
            <h4>Menu</h4>
            <nav>
                <ul>
                    <li><a href="/pages/form-daftar.php"> Daftar Baru </a></li>
                    <li><a href="/pages/list-tamu.php"> Pendaftaran </a></li>
                </ul>
            </nav>
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
    </div>
</body>
<?php include('./inc/footer.php'); ?>
</html>