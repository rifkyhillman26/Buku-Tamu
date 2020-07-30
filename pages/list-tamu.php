<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Pendaftaran Tamu Baru | Wisuda Ubsi</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <table border="2">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM tamu";
            $query = mysqli_query($db, $sql);
    
            while($orang = mysqli_fetch_array($query)){
                echo "<tr>";
    
                echo "<td>".$orang['id']."</td>";
                echo "<td>".$orang['nama']."</td>";
                echo "<td>".$orang['alamat']."</td>";
                echo "<td>".$orang['jenis_kelamin']."</td>";
                echo "<td>".$orang['agama']."</td>";
    
                echo "<td>";
                echo "<a href='form-edit.php?id=".$orang['id']."'>Edit</a> | ";
                echo "<a href='delete.php?id=".$orang['id']."'>Hapus</a>";
                echo "</td>";
    
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>

</html>