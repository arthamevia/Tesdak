<?php

function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/siswa-api/api/siswa_tampil.php");
$data = json_decode($data, TRUE); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tampil Siswa</title>
        <link rel="stylesheet" href="layout/css/style.css"> </head>

    <body>
        
    <div class="wrap">
        <div class="header">
            <h1>SISWA</h1>

        </div>
        <div class="menu">
            <ul>
                <li><a href="">Home</a></li>
            </ul>
        </div>
        <div class="badan">
            <div class="sidebar">
                <ul>
                    <li><a href="../readapi/tampil.php">Siswa</a></li>
                    <li><a href="../readapi/about.php">About</a></li>
                </ul>
            </div>
                <div class="content">
                    <p>DATA Siswa</p> <a href="../readapi/tambah.php">Tambah Data</a>
                    <table style="width:100%">
                        <tr>
                            <td>Nama</td>
                            <td>Jurusan</td>
                            <td>Alamat</td>
                            <td>Aksi</td>
                        </tr>
                        <?php foreach ($data as $data) { ?>
                            <tr>
                                <td>
                                    <?= $data["id"] ?>
                                </td>
                                <td>
                                    <?= $data["nama"] ?>
                                </td>
                                <td>
                                    <?= $data["jurusan"] ?>
                                </td>
                                <td>
                                    <?= $data["alamat"] ?>
                                </td>
                                <td colspan="2"> <a href="../readapi/edit.php?id=<?= $data['id'] ?>">Edit</a> <a href="../api/siswa_hapus.php?id=<?= $data['id'] ?>">Hapus</a> </td>
                            </tr>
                            <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
    </html>