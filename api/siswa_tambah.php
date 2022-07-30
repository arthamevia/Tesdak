<?php
require_once('../config/koneksi.php');

if (isset($_POST['nama']) && isset($_POST['jurusan']) && isset($_POST['alamat'])) {
	$nama   	= $_POST['nama'];
	$jurusan 	= $_POST['jurusan'];
	$alamat 			= $_POST['alamat'];
	$sql = $conn->prepare("INSERT INTO siswa (nama, jurusan, alamat) VALUES (?, ?, ?)");
	$sql->bind_param('ssdd', $nama, $jurusan, $alamat);
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
