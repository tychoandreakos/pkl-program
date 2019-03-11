<div class="card">
	<div class="card-header">
		<strong class="card-title">#Data Riwayat Pekerjaan <a href="<?= site_url('pegawai/data-pegawai/' . $id); ?>" class="btn btn-outline-primary  btn-sm float-right">Kembali</a></strong>
	</div>
	<div class="card-body">

		<form action="<?=  base_url('pegawai/data-pekerjaan/' . $id); ?>" method="post">
        <div class="text-danger"><?php echo form_error('nama') ?></div>
        <div class="text-danger"><?php echo form_error('lokasi') ?></div>
        <div class="text-danger"><?php echo form_error('jabatan') ?></div>
        <div class="text-danger"><?php echo form_error('periode_awal') ?></div>
        <div class="text-danger"><?php echo form_error('periode_akhir') ?></div>
        
			<input type="hidden" name="id" value="<?= $id ?>">
			<input type="hidden" name="nik" value="<?= $nik ?>">

			<div class="form-group">
				<label class="form-control-label" for="nama">Nama perusahaan</label><input type="text" id="nama" class="form-control"
				 placeholder="Masukan Nama Lengkap" name="nama" autocomplete="off">
			</div>

            <div class="form-group">
				<label class="form-control-label" for="jabatan">Lokasi</label><input type="text" id="lokasi" class="form-control"
				 placeholder="Lokasi Pekerjaan" name="lokasi" autocomplete="off">
			</div>

            <div class="form-group">
				<label class="form-control-label" for="jabatan">Jabatan</label><input type="text" id="jabatan" class="form-control"
				 placeholder="Jabatan Yang Pernah Diambil" name="jabatan" autocomplete="off">
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col">
						<label class="form-control-label" for="tglLahir">Periode Awal</label><input class="form-control" id="tglLahir"
						 type="text" name="periode_awal" placeholder="Contoh : 29 Agustus 1998" autocomplete="off">
					</div>

					<div class="col">
						<label class="form-control-label" for="tmpLahir">Periode Akhir</label><input class="form-control" id="tmpLahir"
						 type="text" name="periode_akhir" placeholder="Contoh : Bandung" autocomplete="off">
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-success float-right">Simpan</button>
	</div>
</div>

</form>