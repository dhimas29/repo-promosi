<div class="row form-group">
	<div class="col-lg-3">
		<label>NIP</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" readonly type="text" name="nip" placeholder="NIP" required="" value="<?php if (isset($data_calon)) echo $data_calon['nip']; ?>">
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Nama</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" <?php if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) {
										echo "readonly";
									} ?> type="text" name="nama" placeholder="Nama" required="" value="<?php if (isset($data_calon)) echo $data_calon['nama']; ?>">
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Jenis Kelamin</label>
	</div>
	<div class="col-lg-9">
		<?php if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) { ?>
			<input type="hidden" name="jenis_kelamin" value="<?php if (isset($data_calon)) echo $data_calon['jenis_kelamin']; ?>">
		<?php } ?>
		<input type="radio" <?php if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) {
								echo "disabled";
							} ?> name="jenis_kelamin" value="Laki - Laki" <?php if (isset($data_calon) && $data_calon['jenis_kelamin'] == 'Laki - Laki') echo 'checked';  ?>> Laki - Laki
		<input type="radio" <?php if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) {
								echo "disabled";
							} ?> name="jenis_kelamin" value="Perempuan" <?php if (isset($data_calon) && $data_calon['jenis_kelamin'] == 'Perempuan') echo 'checked';  ?>> Perempuan
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Alamat</label>
	</div>
	<div class="col-lg-9">
		<textarea name="alamat" <?php if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) {
									echo "readonly";
								} ?> id="alamat" class="form-control" rows="3"><?php if (isset($data_calon)) echo $data_calon['alamat']; ?></textarea>
		<!-- <input class="form-control" type="text" name="kecamatan" placeholder="Kecamatan" required="" value="<?php if (isset($data_calon)) echo $data_calon['kecamatan']; ?>"> -->
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>No Telp</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" <?php if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) {
										echo "readonly";
									} ?> type="number" name="no_telp" placeholder="ex:0812xxxx" required="" value="<?php if (isset($data_calon)) echo $data_calon['no_telp']; ?>">
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Email</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" <?php if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) {
										echo "readonly";
									} ?> type="email" name="email" placeholder="example@gmail.com" required="" value="<?php if (isset($data_calon)) echo $data_calon['email']; ?>">
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Divisi</label>
	</div>
	<div class="col-lg-9">
		<?php if (($_SESSION['level'] == 'Karyawan')) { ?>
			<input type="hidden" name="divisi" value="<?php if (isset($data_calon)) echo $data_calon['divisi']; ?>">
		<?php } ?>
		<input type="radio" <?php if (($_SESSION['level'] == 'Karyawan')) {
								echo "disabled";
							} ?> name="divisi" value="Divisi Engineering" <?php if (isset($data_calon) && $data_calon['divisi'] == 'Divisi Engineering') echo 'checked';  ?>> Divisi Engineering
		<input type="radio" <?php if (($_SESSION['level'] == 'Karyawan')) {
								echo "disabled";
							} ?> name="divisi" value="Divisi Purchasing" <?php if (isset($data_calon) && $data_calon['divisi'] == 'Divisi Purchasing') echo 'checked';  ?>> Divisi Purchasing
		<input type="radio" <?php if (($_SESSION['level'] == 'Karyawan')) {
								echo "disabled";
							} ?> name="divisi" value="Divisi Cost Control" <?php if (isset($data_calon) && $data_calon['divisi'] == 'Divisi Cost Control') echo 'checked';  ?>> Divisi Cost Control
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Awal Masuk Kerja</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" <?php if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) {
										echo "readonly";
									} ?> type="date" name="awal_masuk" required="" value="<?php if (isset($data_calon)) echo $data_calon['awal_masuk']; ?>">
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Password</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="password" name="password" placeholder="password" required="" value="<?php if (isset($data_calon)) echo $data_calon['password']; ?>">
	</div>
</div>
<input type="hidden" name="session" value="<?php echo $_SESSION['level'] ?>">