<?php
include 'config/koneksi.php';
// if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) {
// 	$hasil = mysqli_query($koneksi, "SELECT * FROM CALON where divisi ='$_SESSION[level]'");
// } else {
// 	$hasil = mysqli_query($koneksi, "SELECT * FROM CALON");
// }
$hasil = mysqli_query($koneksi, "SELECT * FROM hasil_seleksi
join calon on (calon.id = hasil_seleksi.calon_id) where status ='Dapat di Promosikan'");

while ($data = mysqli_fetch_assoc($hasil)) {
	$datas[] = $data;
}
