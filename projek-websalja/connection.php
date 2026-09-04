<?php

$host = "localhost";
$username = "root";
$password = "";
$databaseName = "db_siswa";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$koneksi = mysqlI_connect($host,$username,$password,$databaseName);

if(!$koneksi){
    echo "Koneksi Tidak Berhasil";
}else{
    echo "<h1 style='color:green'>Sukses</h1>";
    echo "Berhasil terhubung ke database: " .$databaseName;
}