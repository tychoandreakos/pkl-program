<div class="card">
	<div class="card-header">
		<strong class="card-title">#Data Pendidikan <a href="<?= site_url('pegawai/data-pegawai/' . $data->id_pendidikan); ?>" class="btn btn-outline-primary  btn-sm float-right">Kembali</a></strong>
	</div>
	<div class="card-body">

		<form action="<?=  base_url('pegawai/data-pendidikan/update/' . $data->id_pendidikan); ?>" method="post">
			<div class="text-danger">
				<?php echo form_error('sekolah') ?>
			</div>
			<div class="text-danger">
				<?php echo form_error('jurusan') ?>
			</div>
			<div class="text-danger">
				<?php echo form_error('nama_sekolah') ?>
			</div>
            <div class="text-danger">
				<?php echo form_error('lokasi') ?>
			</div>
            <div class="text-danger">
				<?php echo form_error('thn_lulus') ?>
			</div>

			<input type="hidden" name="id" value="<?= $data->id_pendidikan ?>">
			<input type="hidden" name="nik" value="<?= $data->nik_pegawai ?>">

			<div class="form-group">
				<label class="form-control-label" for="sekolah">Tingkat Sekolah</label><input type="text" id="sekolah" class="form-control"
				 placeholder="Contoh: SMA" name="sekolah" value="<?= $data->sekolah ?>" autocomplete="off">
			</div>

			<div class="form-group">

				<label class="form-control-label" for="jurusan">Jurusan</label><input class="form-control" id="jurusan" type="text"
				 name="jurusan" placeholder="Masukan Jurusan Sekolah" value="<?= $data->jurusan ?>" autocomplete="off">
			</div>

			<div class="form-group">
				<label class="form-control-label" for="nama">Nama Sekolah</label><input class="form-control" id="nama" type="text"
				 name="nama_sekolah" placeholder="Nama Lengkap Sekolah" value="<?= $data->nama_sekolah ?>" autocomplete="off">
			</div>
	


<div class="form-group">
	<label class="form-control-label" for="lokasi">Lokasi</label><input type="text" id="lokasi" class="form-control"
	 placeholder="Contoh: Bandung" name="lokasi" value="<?= $data->lokasi ?>" autocomplete="off">
</div>

<div class="form-group">
	<label class="form-control-label" for="thn_lulus">Tahun Kelulusan</label><input type="text" id="thn_lulus" class="form-control"
	 placeholder="Contoh: 2017" name="thn_lulus" value="<?= $data->thn_lulus ?>" autocomplete="off">
</div>


<button type="submit" class="btn btn-success float-right">Simpan</button>
</div>
</div>

</form>