<?php
include 'config/koneksi.php';
$hasil = mysqli_query($koneksi, "SELECT * FROM hasil_seleksi 
join calon on hasil_seleksi.calon_id = calon.id
where calon.nip = '$_SESSION[username]'");

while ($data = mysqli_fetch_assoc($hasil)) {
	$datas[] = $data;
}
