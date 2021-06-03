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

$sql = "UPDATE calon set nip='$nip',nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat',no_telp='$no_telp',email='$email', 
divisi='$divisi',awal_masuk='$awal_masuk',lama_kerja ='$lama_kerja->days' where id='$id'";
if ($_POST['session'] == 'superadmin') {
	mysqli_query($koneksi, $sql);
} else {
	$sub_id = $_POST['sub_id'];
	$old_sub_id = $_POST['old_sub_id'];
	$new_sub = isset($_POST['new_sub']) ? $_POST['new_sub'] : null;
	if (mysqli_query($koneksi, $sql)) {
		foreach ($old_sub_id as $key => $value) {
			$value = isset($_POST['value'][$key]) ? $_POST['value'][$key] : 0;

			mysqli_query($koneksi, "UPDATE calon_subkriteria set subkriteria_id='$sub_id[$key]', value='$value' WHERE id=" . $old_sub_id[$key]);
		}
		if (isset($new_sub)) {
			foreach ($new_sub as $key => $value) {
				$value = isset($_POST['value'][$key]) ? $_POST['value'][$key] : 0;

				mysqli_query($koneksi, "INSERT INTO calon_subkriteria VALUES (NULL, $id, '$sub_id[$key]', $value) ");
			}
		}

		$_SESSION['pesan'] = "Berhasil tambah data calon";
	} else {
		$_SESSION['pesan'] = "Gagal tambah data calon";
	}
}
header('location:../../index.php?url=data_calon');
