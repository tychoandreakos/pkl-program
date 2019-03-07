<?php


var_dump(unserialize($anak->nama_anak));
die;

?>


<div class="card">
	<div class="card-header">
		<strong class="card-title">#Data Anak Karyawan <a href="<?= site_url('pegawai/data-pegawai/' . $anak->nik); ?>" class="btn btn-outline-primary  btn-sm float-right">Kembali</a> <a href="<?= site_url('pegawai/data-pegawai/' . $anak->nik); ?>" class="btn btn-outline-success btn-sm float-right mr-2">Detail Data Anak</a></strong>
	</div>
	<div class="card-body">

		<form action="<?=  base_url('pegawai/data-anak/update/' . $anak->nik); ?>" method="post">
        <div class="text-danger"><?php echo form_error('nama_anak') ?></div>
        <div class="text-danger"><?php echo form_error('tgl_lahiranak') ?></div>
        <div class="text-danger"><?php echo form_error('tmp_lahiranak') ?></div>
        <div class="text-danger"><?php echo form_error('pendidikananak') ?></div>
        <div class="text-danger"><?php echo form_error('jk') ?></div>
        <div class="text-danger"><?php echo form_error('status') ?></div>
        
        <input type="hidden" name="id" value="<?= $anak->id ?>">
			<input type="hidden" name="nik" value="<?= $anak->nik ?>">


            <input type="hidden" name="nm" value="<?= $anak->nama_anak ?>">
            <input type="hidden" name="tgl" value="<?= $anak->tgl_lahiranak ?>">
            <input type="hidden" name="tmp" value="<?= $anak->tmp_lahiranak ?>">
            <input type="hidden" name="pend" value="<?= $anak->pendidikananak ?>">
            <input type="hidden" name="jens" value="<?= $anak->jk ?>">
            <input type="hidden" name="st" value="<?= $anak->status ?>">

			<div class="form-group">
				<label class="form-control-label" for="namaanak">Nama Anak</label><input type="text" id="namaanak" class="form-control"
				 placeholder="Masukan Nama Lengkap" name="nama_anak" autocomplete="off">
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col">
						<label class="form-control-label" for="tglLahiranak">Tanggal Lahir</label><input class="form-control" id="tglLahiranak"
						 type="text" name="tgl_lahiranak" placeholder="Contoh : 29 Agustus 1998" autocomplete="off">
					</div>

					<div class="col">
						<label class="form-control-label" for="tmpLahiranak">Tempat Lahir</label><input class="form-control" id="tmpLahiranak"
						 type="text" name="tmp_lahiranak" placeholder="Contoh : Bandung" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="form-control-label" for="pendidikan">Pendidikan</label><input type="text" id="pendidikan" class="form-control"
				 placeholder="Pendidikan Terakhir" name="pendidikananak" autocomplete="off">
			</div>

            <div class="form-group">
				<label class="form-control-label" for="namaibu">Jenis Kelamin</label><select name="jk" class="form-control" id="">
				<option hidden>Pilih Jenis Kelamin</option>
				<option value="0">Laki - laki</option>
				<option value="1">Perempuan</option>
				</select>
			</div>

			<div class="form-group">
				<label class="form-control-label" for="status">Status</label><select name="statusanak" class="form-control" id="status">
				<option hidden>Status Anak</option>
				<option value="0">Anak Ke 1</option>
				<option value="1">Anak ke 2</option>
				<option value="2">Anak ke 3</option>
				<option value="3">Anak ke 4</option>
				</select>
			</div>

			
			<button type="submit" class="btn btn-success float-right">Simpan</button>
	</div>
</div>

</form>