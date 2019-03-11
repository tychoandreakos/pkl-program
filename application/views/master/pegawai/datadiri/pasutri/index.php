<div class="card">
	<div class="card-header">
		<strong class="card-title">#Data Diri Suami / Istri <a href="<?= site_url('pegawai/data-pegawai/' . $id); ?>" class="btn btn-outline-primary  btn-sm float-right">Kembali</a></strong>
	</div>
	<div class="card-body">

		<form action="<?=  base_url('pegawai/data-pasutri/' . $id); ?>" method="post">
        <div class="text-danger"><?php echo form_error('nama') ?></div>
        <div class="text-danger"><?php echo form_error('tgl_lahir') ?></div>
        <div class="text-danger"><?php echo form_error('tmp_lahir') ?></div>
        <div class="text-danger"><?php echo form_error('pendidikan') ?></div>
        
			<input type="hidden" name="id" value="<?= $id ?>">
			<input type="hidden" name="nik" value="<?= $nik ?>">

			<div class="form-group">
				<label class="form-control-label" for="nama">Nama Suami / Istri</label><input type="text" id="nama" class="form-control"
				 placeholder="Masukan Nama Lengkap" name="nama" autocomplete="off">
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col">
						<label class="form-control-label" for="tglLahir">Tanggal Lahir</label><input class="form-control" id="tglLahir"
						 type="text" name="tgl_lahir" placeholder="Contoh : 29 Agustus 1998" autocomplete="off">
					</div>

					<div class="col">
						<label class="form-control-label" for="tmpLahir">Tempat Lahir</label><input class="form-control" id="tmpLahir"
						 type="text" name="tmp_lahir" placeholder="Contoh : Bandung" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="form-control-label" for="pendidikan">Pendidikan</label><input type="text" id="pendidikan" class="form-control"
				 placeholder="Pendidikan Terakhir" name="pendidikan" autocomplete="off">
			</div>

            <div class="form-group">
            <label for="status" class="form-control-label">Status</label>
            <select name="status" id="status" class="form-control">
            <option value="0">Istri</option>
            <option value="1">Suami</option>
            </select>
            </div>
			<button type="submit" class="btn btn-success float-right">Simpan</button>
	</div>
</div>

</form>