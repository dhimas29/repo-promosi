<?php
include 'config/koneksi.php';

$id = $_SESSION['username'];
$query = "SELECT * from calon
join pengguna on pengguna.username = calon.nip
	where nip='$id'";
// $row = mysqli_num_rows(mysqli_query($koneksi, $quer));
// if ($row > 0) {
// 	$query = "SELECT calon.*, kriteria.nama as nama_kriteria, 
// 	subkriteria.nama as nama_subkriteria, calon_subkriteria.value as value_calon_subkriteria, 
// 	calon_subkriteria.id as calon_subkriteria_id FROM calon_subkriteria 
// 	left join calon on (calon.id=calon_subkriteria.calon_id) 
// 	left join subkriteria on (subkriteria.id=calon_subkriteria.subkriteria_id) 
// 	left join kriteria on (kriteria.id=subkriteria.kriteria_id) 
// 	where calon_subkriteria.calon_id='$id'";
// } else {
// 	$query = "SELECT calon.*, kriteria.nama as nama_kriteria, 
// 	subkriteria.nama as nama_subkriteria, calon_subkriteria.value as value_calon_subkriteria, 
// 	calon_subkriteria.id as calon_subkriteria_id FROM calon 
// 	left join calon_subkriteria on (calon.id=calon_subkriteria.calon_id) 
// 	left join subkriteria on (subkriteria.id=calon_subkriteria.subkriteria_id) 
// 	left join kriteria on (kriteria.id=subkriteria.kriteria_id) 
// 	where calon.id='$id'";
// }
$hasil = mysqli_query($koneksi, $query);
while ($data_row = mysqli_fetch_array($hasil)) {
	$datas[] = $data_row;
}
if (!(empty($datas))) {
	$data['id'] = $datas[0]['id'];
	$data['nip'] = $datas[0]['nip'];
	$data['nama'] = $datas[0]['nama'];
	$data['jenis_kelamin'] = $datas[0]['jenis_kelamin'];
	$data['alamat'] = $datas[0]['alamat'];
	$data['no_telp'] = $datas[0]['no_telp'];
	$data['email'] = $datas[0]['email'];
	$data['divisi'] = $datas[0]['divisi'];
	$data['awal_masuk'] = $datas[0]['awal_masuk'];
	$data['lama_kerja'] = $datas[0]['lama_kerja'];
	$data['password'] = $datas[0]['password'];
	$data_calon = $data;
}
unset($data);
unset($datas);
// echo json_encode(count($datas));
