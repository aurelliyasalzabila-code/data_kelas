<?php

include 'connection.php';

$query = "SELECT * FROM tb_siswa";
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
    <table broder = '1'><thead>
        <t>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
        </t>
    </thead>
    <tbody>
        <?php 

        $no =1;

        while($row = mysqli_fetch_assoc ($result)){
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $row ('NIS') . "</td>";
        echo "<td>" . $row ('nama_siswa') ."</td>";

        }
    ?>
    </tbody>
    </table>
    </body>

        
        
    