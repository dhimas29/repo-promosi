<?php
include 'config/koneksi.php';
// if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) {
// 	$hasil = mysqli_query($koneksi, "SELECT * FROM CALON where divisi ='$_SESSION[level]'");
// } else {
// 	$hasil = mysqli_query($koneksi, "SELECT * FROM CALON");
// }
$cek_hapus = mysqli_query($koneksi, "SELECT * FROM hasil_seleksi where persetujuan like '-' 
and status like '%Dapat di Promosikan%'");
while ($row = mysqli_fetch_array($cek_hapus)) {
	$hapus = mysqli_query($koneksi, "DELETE FROM hasil_seleksi where id ='$row[id]'");
}

$hasil = mysqli_query($koneksi, "SELECT * FROM hasil_seleksi
join calon on (calon.id = hasil_seleksi.calon_id) 
where status like '%Dapat di Promosikan%' and persetujuan not like '-'");

while ($data = mysqli_fetch_assoc($hasil)) {
	$datas[] = $data;
}
