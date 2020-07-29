<?php include("./setapp/config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pendaftaran Tamu Baru | Wisuda Ubsi</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <table border="1">
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
                echo "<a href='hapus.php?id=".$orang['id']."'>Hapus</a>";
                echo "</td>";
    
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>

</html>