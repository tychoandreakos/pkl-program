<div class="card">
	<div class="card-header">
		<strong class="card-title">#Detail - Pegawai 
        <a href="<?= site_url('pegawai'); ?>" class="btn btn-outline-primary ml-1  btn-sm float-right">Kembali</a>
        </strong>
	</div>
	<div class="card-body">

<div class="container">
	<div class="row">
    <table class="table table-sm">
    <tbody>

    <tr>
    <td>Nik Pegawai</td>
    <td><?= $anak->nik_pegawai ?></td>
    </tr>

    <tr>
    <td>Nama Anak</td>
    <td><?= ucwords($anak->nama_anak) ?></td>
    </tr>

    <tr>
    <td>Tempat, Tanggal Lahir</td>
    <td><?= ucwords("$anak->tmp_lahiranak, $anak->tgl_lahiranak") ?></td>
    </tr>

    <tr>
    <td>Pendidikan</td>
    <td><?= ucwords($anak->pendidikananak) ?></td>
    </tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td><?= ucwords($anak->jk) ?></td>
    </tr>

    <tr>
    <td>Status</td>
    <td><?= $anak->status ?></td>
    </tr>
    

    </tbody>
    </table>
    
    </div>
	</div>
    <div class="float-right">
    <a href="<?= site_url('pegawai/edit/'. $anak->id_anak) ?>" class="btn btn-success btn-sm">Update Anak</a>
    <a href="<?= site_url('pegawai/hapus/' . $anak->id_anak) ?>" class="hapus btn btn-outline-danger btn-sm">Hapus Anak</a>
    </div>
    </div>
</div>