<div class="card">
	<div class="card-header">
		<strong class="card-title">#Add - Barang <a href="<?= site_url('barang'); ?>" class="btn btn-outline-primary  btn-sm float-right">Kembali</a></strong>
	</div>
	<div class="card-body">
 
		<form action="<?=  base_url('barang/addbarang'); ?>" method="post">
        <div class="text-danger"><?php echo form_error('nmbarang') ?></div>
        <div class="text-danger"><?php echo form_error('harga') ?></div>

			<div class="form-group">
				<label class="form-control-label" for="nama">Nama Barang</label><input type="text" id="nama" class="form-control"
				 placeholder="Masukan Nama Barang" name="nmbarang">
			</div>

            <div class="form-group">
				<label class="form-control-label" for="harga">Harga</label><input type="number" id="harga" class="form-control"
				 placeholder="Masukan Harga Barang" name="harga" step="1" pattern="\d+">
			</div>
			<button type="submit" class="btn btn-success float-right">Simpan</button>
	</div>
</div>

</form>