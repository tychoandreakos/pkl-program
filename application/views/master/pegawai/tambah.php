<div class="card">
	<div class="card-header">
		<strong class="card-title">#Add - Pegawai <a href="<?= site_url('pegawai'); ?>" class="btn btn-outline-primary  btn-sm float-right">Kembali</a></strong>
	</div>
	<div class="card-body">

		<form action="<?=  base_url('pegawai/addpegawai'); ?>" method="post">
        <div class="text-danger"><?php echo form_error('nama') ?></div>
        <div class="text-danger"><?php echo form_error('alamat') ?></div>
        <div class="text-danger"><?php echo form_error('tgl_lahir') ?></div>
        <div class="text-danger"><?php echo form_error('tmp_lahir') ?></div>
        <div class="text-danger"><?php echo form_error('jk') ?></div>
        <div class="text-danger"><?php echo form_error('no_telp') ?></div>
        <div class="text-danger"><?php echo form_error('status') ?></div>
        <div class="text-danger"><?php echo form_error('email') ?></div>
		<div class="text-danger"><?php echo form_error('agama') ?></div>
        

			<div class="form-group">
				<label class="form-control-label" for="nama">Nama Lengkap</label><input type="text" id="nama" class="form-control"
				 placeholder="Masukan Nama Lengkap" name="nama" autocomplete="off">
			</div>

			<div class="form-group">
				<label class="form-control-label" for="alamat">Alamat</label><textarea class="form-control" name="alamat" id="alamat"
				 placeholder="Masukan Alamat" autocomplete="off"></textarea>
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
				<label for="jk">Jenis Kelamin</label>
				<select class="form-control" id="jk" name="jk">
					<option hidden>Pilih Jenis Kelamin</option>
					<option value="0">Laki - Laki</option>
					<option value="1">Perempuan</option>
				</select>
			</div>

			<div class="form-group">
				<label class="form-control-label" for="telp">No Telp</label><input type="number" id="telp" class="form-control"
				 placeholder="Masukan No Telepon" name="no_telp" autocomplete="off">
			</div>

            <div class="form-group">
				<label for="status">Status</label>
				<select class="form-control" id="status" name="status">
					<option hidden>Pilih Status Pernikahan</option>
					<option value="0">Sudah Menikah</option>
					<option value="1">Belum Menikah</option>
				</select>
			</div>

            <div class="form-group">
				<label class="form-control-label" for="email">Email</label><input type="text" id="email" class="form-control"
				 placeholder="Masukan Email" name="email" autocomplete="off">
			</div>

			<div class="form-group">
				<label class="form-control-label" for="goldar">Gol Darah</label>
				<select name="gol_darah" status="goldar" class="form-control" >
					<option hidden>Pilih Jenis Golongan Darah</option>
					<option value="0">A</option>
					<option value="1">B</option>
					<option value="2">AB</option>
					<option value="3">O</option>
				</select>
			</div>

			<div class="form-group">
				<label class="form-control-label" for="email">Agama</label>
				<input type="text" id="agama" class="form-control"
				 placeholder="Masukan Agama" name="agama" autocomplete="off">
			</div>
			<p>* Email Boleh Dikosongkan</p>
			<button type="submit" class="btn btn-success float-right">Simpan</button>
	</div>
</div>

</form>