<?php
require_once('../config/koneksi.php');

if (isset($_POST['id'])) {
    $id                 = $_POST['id'];
    $nama        = $_POST['nama'];
    $jurusan        = $_POST['jurusan'];
    $alamat              = $_POST['alamat'];
    $sql = $conn->prepare("UPDATE siswa SET nama=?, jurusan=?, alamat=?, WHERE id=?");
    $sql->bind_param('ssddd', $nama, $jurusan, $alamat, $id);
    $sql->execute();
    if ($sql) {
        //echo json_encode(array('RESPONSE' => 'SUCCESS'));
        header("location:../readapi/tampil.php");
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo "GAGAL";
}