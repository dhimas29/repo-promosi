<?php

$cek = mysqli_query($koneksi, "SELECT distinct calon.* FROM CALON 
JOIN CALON_SUBKRITERIA ON (calon.id=CALON_SUBKRITERIA.calon_id)  
join hasil_seleksi on (calon.id = hasil_seleksi.calon_id)
where calon.divisi ='$_POST[session]' and hasil_seleksi.persetujuan != 'Disetujui'");
$row = mysqli_num_rows($cek);

if ($row > 0) {
	$hasil = mysqli_query($koneksi, "SELECT distinct calon.* FROM CALON 
	 JOIN CALON_SUBKRITERIA ON (calon.id=CALON_SUBKRITERIA.calon_id)  
	 join hasil_seleksi on (calon.id = hasil_seleksi.calon_id)
	where divisi ='$_POST[session]' and persetujuan !='Disetujui' ");
} else {
	$hasil = mysqli_query($koneksi, "SELECT distinct calon.* FROM CALON 
	 JOIN CALON_SUBKRITERIA ON (calon.id=CALON_SUBKRITERIA.calon_id)  
	where divisi ='$_POST[session]'");
}
while ($data_row = mysqli_fetch_assoc($hasil)) {
	$datas['data'][$data_row['id']] = $data_row;
	$ce =  mysqli_query($koneksi, "SELECT KRITERIA.nama, KRITERIA.id, SUBKRITERIA.NAMA AS nama_subkriteria, 
	SUBKRITERIA.BOBOT AS bobot_subkriteria, CALON_SUBKRITERIA.value 
	FROM CALON_SUBKRITERIA JOIN SUBKRITERIA ON (SUBKRITERIA.ID=CALON_SUBKRITERIA.subkriteria_id) 
	 join KRITERIA ON (KRITERIA.ID=SUBKRITERIA.kriteria_id) 
	 join calon on (calon.id=calon_subkriteria.calon_id)
	 join hasil_seleksi on (calon.id = hasil_seleksi.calon_id)
	WHERE divisi ='$_POST[session]' and persetujuan !='Disetujui' and CALON_SUBKRITERIA.CALON_ID =" . $datas['data'][$data_row['id']]['id']);
	$ro = mysqli_num_rows($ce);
	if ($ro > 0) {
		$hasil2 = mysqli_query($koneksi, "SELECT KRITERIA.nama, KRITERIA.id, SUBKRITERIA.NAMA AS nama_subkriteria, 
	SUBKRITERIA.BOBOT AS bobot_subkriteria, CALON_SUBKRITERIA.value 
	FROM CALON_SUBKRITERIA JOIN SUBKRITERIA ON (SUBKRITERIA.ID=CALON_SUBKRITERIA.subkriteria_id) 
	 join KRITERIA ON (KRITERIA.ID=SUBKRITERIA.kriteria_id) 
	 join calon on (calon.id=calon_subkriteria.calon_id)
	 join hasil_seleksi on (calon.id = hasil_seleksi.calon_id)
	WHERE divisi ='$_POST[session]' and persetujuan !='Disetujui' and CALON_SUBKRITERIA.CALON_ID =" . $datas['data'][$data_row['id']]['id']);
	} else {
		$hasil2 = mysqli_query($koneksi, "SELECT KRITERIA.nama, KRITERIA.id, SUBKRITERIA.NAMA AS nama_subkriteria, 
	SUBKRITERIA.BOBOT AS bobot_subkriteria, CALON_SUBKRITERIA.value 
	FROM CALON_SUBKRITERIA JOIN SUBKRITERIA ON (SUBKRITERIA.ID=CALON_SUBKRITERIA.subkriteria_id) 
	 join KRITERIA ON (KRITERIA.ID=SUBKRITERIA.kriteria_id) 
	 join calon on (calon.id=calon_subkriteria.calon_id)
	WHERE divisi ='$_POST[session]' and CALON_SUBKRITERIA.CALON_ID =" . $datas['data'][$data_row['id']]['id']);
	}
	while ($data_row2 = mysqli_fetch_assoc($hasil2)) {
		$datas['data'][$data_row['id']]['kriteria'][$data_row2['nama']] = $data_row2;
	}
}
// ekstra
// $datas['ekstra']['total_bobot'] = array_sum($bobot);

$data_calon = $datas;

unset($datas);
