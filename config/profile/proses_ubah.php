<?php
include '../koneksi.php';

$id = $_POST['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$divisi = $_POST['divisi'];
$awal_masuk = $_POST['awal_masuk'];
$tgl1 = new DateTime($awal_masuk);
$tgl2 = new DateTime();
$lama_kerja = date_diff($tgl1, $tgl2);

$sql = mysqli_query($koneksi, "UPDATE calon set nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat',no_telp='$no_telp',email='$email', awal_masuk='$awal_masuk',lama_kerja ='$lama_kerja->days' where nip='$id'");
$sql2 = mysqli_query($koneksi, "UPDATE pengguna set nama='$nama', email='$email', password='$_POST[password]' where username='$id'");
if ($sql && $sql2) {
	$_SESSION['pesan'] = "Berhasil ubah data";
} else {
	$_SESSION['pesan'] = "Gagal ubah data";
}
header('location:../../index.php?url=profile');
