<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="layout/css/style.css"> </head>

<body>

            <div class="content">
                <p>Tambah Siswa</p> <a href="../readapi/tampil.php">Kembali</a>
                <div id="stylish" class="myform">
                    <h1>TAMBAH Siswa</h1>
                    <p>form ini digunakan untuk tambah data siswa</p>
                    <form action="../api/siswa_tambah.php" method="post" id="form">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" id="nama" placeholder="Nama" aria-describedby="helpId"> </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan">
                                <option value="pilih">Pilih Jurusan</option>
                                <option value="rpl">1. RPL</option>
                                <option value="tkro">2. TKRO</option>
                                <option value="tbsm">3. TBSM</option>
                            </select>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" id="alamat" placeholder="Alamat" aria-describedby="helpId"> </div>
                        <div class="form-group">
                            <button type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>