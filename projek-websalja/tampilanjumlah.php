<?php
include 'connection.php';

$query = "SELECT * FROM data_kelas";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil data</title>
</head>
<body>
    <table border = '1'><thead>
        <t>
            <th>Id</th>
            <th>Nama kelas</th>
            <th>Jumlah kelas</th>
        </t>
    </thead>
    <tbody>
        <?php 

        $no =1;

        while($row = mysqli_fetch_assoc ($result)){
        echo "<tr>";
        echo "<td>" . $row['id']. "</td>";
        echo "<td>" . $row['nama_siswa'] . "</td>";
        echo "<td>" . $row ['jumlah_siswa'] ."</td>";

        }
    ?>
    </tbody>
    </table>
    </body>
