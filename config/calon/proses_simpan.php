<?php
include '../koneksi.php';

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
$sub_id = $_POST['sub_id'];

$sql = "INSERT INTO calon (nip,nama,jenis_kelamin,alamat,no_telp,email,divisi,awal_masuk,lama_kerja)VALUES('$nip','$nama','$jenis_kelamin','$alamat','$no_telp','$email','$divisi','$awal_masuk','$lama_kerja->days')";

if (mysqli_query($koneksi, $sql)) {
	$calon_id = $koneksi->insert_id;

	foreach ($sub_id as $key => $value) {
		$value = isset($_POST['value'][$key]) ? $_POST['value'][$key] : 0;

		mysqli_query($koneksi, "INSERT INTO calon_subkriteria VALUES(NULL,'$calon_id','$sub_id[$key]','$value')");
	}

	$_SESSION['pesan'] = "Berhasil tambah data calon";
} else {
	$_SESSION['pesan'] = "Gagal tambah data calon";
}
header('location:../../index.php?url=data_calon');
