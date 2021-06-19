<?php
include 'config/koneksi.php';
if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) {
	$hasil = mysqli_query($koneksi, "SELECT * FROM CALON where divisi ='$_SESSION[level]'");
} else {
	$hasil = mysqli_query($koneksi, "SELECT * FROM CALON");
}

while ($data = mysqli_fetch_assoc($hasil)) {
	$datas[] = $data;
}
