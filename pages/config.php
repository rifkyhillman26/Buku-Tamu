<?php

$server = "localhost";//nilai default dari mysql
$username = "root";//nama user default dari mysql
$password = "";//bisa di custom, cuman sekarang saya belum bisa

$nama_database = "db_tamu";//menyesuaikan dengan database yang ingin kita gunakan

$db = mysqli_connect($server, $username, $password, $nama_database);//connection

//kondisi ketika database gagal connect
if( !$db ){
    echo("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>