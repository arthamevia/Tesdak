<?php

function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/siswa-api/api/siswa_edit.php?id=" . $_GET["id"]);
$data = json_decode($data, TRUE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="layout/css/style.css">
</head>
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
                <p>
                    <a href="../readapi/tampil.php">Kembali</a>
                </p>
                <div id="stylish" class="myform">
                    <h1>EDIT Siswa</h1>
                    <p>form ini digunakan untuk edit siswa</p>
                    <form action="../api/siswa_ubah.php" method="post" id="form">
                        <div class="form-group">
                            <label for="">Kode Siswa</label>
                            <input type="text" value="<?= $data["id"] ?>" name="id" id="id" placeholder="Kode Siswa">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" value="<?= $data["nama"] ?>" name="nama" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            Jurusan
                            <select name="jurusan" id="jurusan">
                                <option value="pilih">Pilih Jurusan</option>
                                <option value="rpl">1. RPL</option>
                                <option value="tkro">2. TKRO</option>
                                <option value="tbsm">3. TBSM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" value="<?= $data["alamat"] ?>" name="alamat" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>