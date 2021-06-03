<div class="row form-group">
	<div class="col-lg-3">
		<label>Nama</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="nama" placeholder="Nama" required="" value="<?php if (isset($data_subkriteria)) echo $data_subkriteria[0]['nama_subkriteria']; ?>">
	</div>
</div>

<div class="row form-group">
	<div class="col-lg-3">
		<label>Bobot</label>
	</div>
	<div class="col-lg-9">
		<select class="form-control" name="bobot">
			<option value="">- Bobot -</option>
			<option value="1" <?php if (isset($data_subkriteria[0]) && $data_subkriteria[0]['bobot_subkriteria'] == '1') echo "selected"; ?>>1</option>
			<option value="2" <?php if (isset($data_subkriteria[0]) && $data_subkriteria[0]['bobot_subkriteria'] == '2') echo "selected"; ?>>2</option>
			<option value="3" <?php if (isset($data_subkriteria[0]) && $data_subkriteria[0]['bobot_subkriteria'] == '3') echo "selected"; ?>>3</option>
			<option value="4" <?php if (isset($data_subkriteria[0]) && $data_subkriteria[0]['bobot_subkriteria'] == '4') echo "selected"; ?>>4</option>
			<option value="5" <?php if (isset($data_subkriteria[0]) && $data_subkriteria[0]['bobot_subkriteria'] == '5') echo "selected"; ?>>5</option>
		</select>
		<!-- <input class="form-control" type="number" name="bobot" placeholder="Bobot" required="" value="<?php if (isset($data_subkriteria)) echo $data_subkriteria[0]['bobot_subkriteria']; ?>"> -->
	</div>
</div>