<div class="card">
	<div class="card-header">
		<strong class="card-title">#Add - Pelanggan <a href="<?= site_url('pelanggan'); ?>" class="btn btn-outline-primary  btn-sm float-right">Kembali</a></strong>
	</div>
	<div class="card-body">
 
		<form action="<?=  base_url('pelanggan/addpelanggan'); ?>" method="post">
        <div class="text-danger"><?php echo form_error('nama') ?></div>
        <div class="text-danger"><?php echo form_error('alamat') ?></div>
        <div class="text-danger"><?php echo form_error('no_telp') ?></div>

			<div class="form-group">
				<label class="form-control-label" for="nama">Nama Lengkap</label><input type="text" id="nama" class="form-control"
				 placeholder="Masukan Nama Lengkap" name="nama">
			</div>

            <div class="form-group">
				<label class="form-control-label" for="nama">Alamat</label><textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat"></textarea>
			</div>

            <div class="form-group">
				<label class="form-control-label" for="telp">Nomor Telepon</label><input type="number" id="telp" class="form-control"
				 placeholder="Masukan Nomer Telepon" name="no_telp">
			</div>

          
			<button type="submit" class="btn btn-success float-right">Simpan</button>
	</div>
</div>

</form>