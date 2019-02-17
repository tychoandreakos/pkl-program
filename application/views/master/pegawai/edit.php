<div class="card">
	<div class="card-header">
		<strong class="card-title">#Edit - Pegawai <a href="<?= site_url('pegawai'); ?>" class="btn btn-outline-primary  btn-sm float-right">Kembali</a></strong>
	</div>
	<div class="card-body">

		<form action="<?=  base_url('pegawai/edit/' . $pegawai->id); ?>" method="post">
        <div class="text-danger"><?php echo form_error('nama') ?></div>
        <div class="text-danger"><?php echo form_error('alamat') ?></div>
        <div class="text-danger"><?php echo form_error('tgl_lahir') ?></div>
        <div class="text-danger"><?php echo form_error('tmp_lahir') ?></div>
        <div class="text-danger"><?php echo form_error('jk') ?></div>
        <div class="text-danger"><?php echo form_error('no_telp') ?></div>
        <div class="text-danger"><?php echo form_error('status') ?></div>
        <div class="text-danger"><?php echo form_error('email') ?></div>
        
        <input type="hidden" name="id" value="<?= $pegawai->id ?>">

			<div class="form-group">
				<label class="form-control-label" for="nama">Nama Lengkap</label><input type="text" id="nama" class="form-control"
				 placeholder="Masukan Nama Lengkap" name="nama" value="<?= $pegawai->nama ?>">
			</div>

			<div class="form-group">
				<label class="form-control-label" for="alamat">Alamat</label><textarea class="form-control" name="alamat" id="alamat"
				 placeholder="Masukan Alamat"><?= $pegawai->alamat ?></textarea>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label class="form-control-label" for="tglLahir">Tanggal Lahir</label><input class="form-control" id="tglLahir"
						 type="text" name="tgl_lahir" placeholder="Contoh : 29 Agustus 1998" value="<?= $pegawai->tgl_lahir ?>">
					</div>

					<div class="col">
						<label class="form-control-label" for="tmpLahir">Tempat Lahir</label><input class="form-control" id="tmpLahir"
						 type="text" name="tmp_lahir" placeholder="Contoh : Bandung" value="<?= $pegawai->tmp_lahir ?>">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="jk">Jenis Kelamin</label>
				<select class="form-control" id="jk" name="jk">
					<option value="<?= $pegawai->jk ?>" hidden><?php if($pegawai->jk = 0){
                        echo 'Laki - Laki';
                    } elseif($pegawai->jk = 1){
                        echo 'Perempuan';
                    } ?></option>
					<option value="0">Laki - Laki</option>
					<option value="1">Perempuan</option>
				</select>
			</div>

			<div class="form-group">
				<label class="form-control-label" for="telp">No Telp</label><input type="number" id="telp" class="form-control"
				 placeholder="Masukan No Telepon" name="no_telp" value="<?= $pegawai->no_telp ?>">
			</div>
                    
            <div class="form-group">
				<label for="status">Status</label>
				<select class="form-control" id="status" name="status">
					<option value="<?= $pegawai->status ?>" hidden><?php if($pegawai->status == 0){
                        echo 'Sudah Menikah';
                    } else if($pegawai->status == 1) {
                        echo 'Belum Menikah';
                    } ?></option>
					<option value="0">Sudah Menikah</option>
					<option value="1">Belum Menikah</option>
				</select>
			</div>

            <div class="form-group">
				<label class="form-control-label" for="email">Email</label><input type="email id="email" class="form-control"
				 placeholder="Masukan Email" name="email" value="<?= $pegawai->email ?>">
			</div>


            <p>* Email Boleh Dikosongkan</p>
			<button type="submit" class="btn btn-success float-right">Simpan</button>
	</div>
</div>

</form>