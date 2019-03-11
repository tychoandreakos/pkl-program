<div class="card">
	<div class="card-header">
		<strong class="card-title">#Data Diri Orang Tua Karyawan <a href="<?= site_url('pegawai/data-pegawai/' . $data->id_orgtua); ?>" class="btn btn-outline-primary  btn-sm float-right">Kembali</a></strong>
	</div>
	<div class="card-body">

		<form action="<?=  base_url('pegawai/data-ortu/update/' . $data->id_orgtua); ?>" method="post">
        <div class="text-danger"><?php echo form_error('namaayah') ?></div>
        <div class="text-danger"><?php echo form_error('tgl_lahirayah') ?></div>
        <div class="text-danger"><?php echo form_error('tmp_lahirayah') ?></div>
        <div class="text-danger"><?php echo form_error('pendidikanayah') ?></div>
        <div class="text-danger"><?php echo form_error('namaibu') ?></div>
        <div class="text-danger"><?php echo form_error('tgl_lahiribu') ?></div>
        <div class="text-danger"><?php echo form_error('tmp_lahiribu') ?></div>
        <div class="text-danger"><?php echo form_error('pendidikanibu') ?></div>
        
			<input type="hidden" name="id_orgtua" value="<?= $data->id_orgtua ?>">
			<input type="hidden" name="nik" value="<?= $data->nik_pegawai ?>">

			<div class="form-group">
				<label class="form-control-label" for="namaayah">Nama Ayah</label><input type="text" id="namaayah" class="form-control"
				 placeholder="Masukan Nama Lengkap" name="namaayah" value="<?= $data->nama_ayah ?>" autocomplete="off">
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col">
						<label class="form-control-label" for="tglLahirayah">Tanggal Lahir Ayah</label><input class="form-control" id="tglLahirayah"
						 type="text" name="tgl_lahirayah" placeholder="Contoh : 29 Agustus 1998" value="<?= $data->tgl_lahir_ayah ?>" autocomplete="off">
					</div>

					<div class="col">
						<label class="form-control-label" for="tmpLahirayah">Tempat Lahir Ayah</label><input class="form-control" id="tmpLahirayah"
						 type="text" name="tmp_lahirayah" placeholder="Contoh : Bandung" value="<?= $data->tmp_lahir_ayah ?>" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="form-control-label" for="pendidikanayah">Pendidikan Ayah</label><input type="text" id="pendidikanayah" class="form-control"
				 placeholder="Pendidikan Terakhir Ayah" name="pendidikanayah" value="<?= $data->pend_ayah ?>" autocomplete="off">
			</div>

            <div class="form-group">
				<label class="form-control-label" for="namaibu">Nama Ibu</label><input type="text" id="namaibu" class="form-control"
				 placeholder="Masukan Nama Lengkap" name="namaibu" value="<?= $data->nama_ibu ?>" autocomplete="off">
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col">
						<label class="form-control-label" for="tglLahiribu">Tanggal Lahir Ibu</label><input class="form-control" id="tglLahiribu"
						 type="text" name="tgl_lahiribu" placeholder="Contoh : 29 Agustus 1998" value="<?= $data->tgl_lahir_ibu ?>" autocomplete="off">
					</div>

					<div class="col">
						<label class="form-control-label" for="tmpLahiribu">Tempat Lahir Ibu</label><input class="form-control" id="tmpLahiribu"
						 type="text" name="tmp_lahiribu" placeholder="Contoh : Bandung" value="<?= $data->tmp_lahir_ibu ?>" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="form-control-label" for="pendidikanibu">Pendidikan Ibu</label><input type="text" id="pendidikanibu" class="form-control"
				 placeholder="Pendidikan Terakhir ibu" name="pendidikanibu" value="<?= $data->pend_ibu ?>" autocomplete="off">
			</div>
			<button type="submit" class="btn btn-success float-right">Simpan</button>
	</div>
</div>

</form>