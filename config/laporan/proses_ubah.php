<?php
include '../koneksi.php';

$id = $_GET['id'];
$status = $_GET['status'];

$sql = "UPDATE hasil_seleksi set persetujuan='$status' where calon_id='$id'";
// var_dump(mysqli_query($koneksi, $sql));
// die;
if (mysqli_query($koneksi, $sql)) {
	$_SESSION['pesan'] = "Berhasil update data";
} else {
	$_SESSION['pesan'] = "Gagal update data";
}

header('location:../../index.php?url=laporan');
