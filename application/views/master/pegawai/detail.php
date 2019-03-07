<div class="card">
	<div class="card-header">
		<strong class="card-title">#Detail - Pegawai 
        <a href="<?= site_url('pegawai'); ?>" class="btn btn-outline-primary ml-1  btn-sm float-right">Kembali</a>
        <a href="<?= site_url('pegawai'); ?>" class="btn btn-primary  btn-sm float-right"><i class="ti-printer"></i></a>
        </strong>
	</div>
	<div class="card-body">

<div class="container">
	<div class="row">
    <table class="table table-sm">
    <tbody>

    <tr>
    <td>ID Pegawai</td>
    <td><?= $pegawai->id ?></td>
    </tr>

    <tr>
    <td>Nama</td>
    <td><?= ucwords($pegawai->nama) ?></td>
    </tr>

    <tr>
    <td>Alamat</td>
    <td><?= ucwords($pegawai->alamat) ?></td>
    </tr>

    <tr>
    <td>Tempat, Tanggal Lahir</td>
    <td><?= ucwords("$pegawai->tmp_lahir, $pegawai->tgl_lahir") ?></td>
    </tr>

    <tr>
    <td>Usia</td>
    <td><?= $this->pegawai->hitungUmur($pegawai->tgl_lahir) ?></td>
    </tr>

    <tr>
    <td>Gol Darah</td>
    <td><?= $this->pegawai->changeGoldar($pegawai->gol_darah) ?></td>
    </tr>

    <tr>
    <td>Agama</td>
    <td><?= ucwords($pegawai->agama) ?></td>
    </tr>

    <tr>
    <td>Status</td>
    <td><?= $this->pegawai->status($pegawai->status) ?></td>
    </tr>

    <tr>
    <td>No Telp</td>
    <td><?= $pegawai->no_telp ?></td>
    </tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td><?= $this->pegawai->jenisKelamin($pegawai->jk) ?></td>
    </tr>

    <tr>
    <td>Email</td>
    <td><?= ucwords($this->pegawai->cekEmail($pegawai->email)); ?></td>
    </tr>
    

    </tbody>
    </table>
    
    </div>
	</div>
    <a href="<?= site_url('pegawai/data-pegawai/'. $pegawai->id); ?>" class="btn btn-outline-success btn-sm">Lengkapi data diri</a>
    <div class="float-right">
    <a href="<?= site_url('pegawai/edit/'. $pegawai->id) ?>" class="btn btn-success btn-sm">Update Pegawai</a>
    <a href="<?= site_url('pegawai/hapus/' . $pegawai->id) ?>" class="hapus btn btn-outline-danger btn-sm">Hapus Pegawai</a>
    </div>
    </div>
</div>

<?php if(isset($ortu)):
    
?>


<div class="card">
	<div class="card-header">
		<strong class="card-title">#Detail - Data Orang Tua 
       </strong>
	</div>
	<div class="card-body">

<div class="container">
	<div class="row">
    <table class="table table-sm">
    <tbody>


    <tr>
    <td>Nama Ayah</td>
    <td><?= ucwords($ortu->nama_ayah) ?></td>
    </tr>

    <tr>
    <td>Tempat, Tanggal Lahir Ayah</td>
    <td><?= ucwords("$ortu->tmp_lahir_ayah, $ortu->tgl_lahir_ayah") ?></td>
    </tr>

    <tr>
    <td>Pendidikan Ayah</td>
    <td><?= $ortu->pend_ayah ?></td>
    </tr>

    <tr>
    <td>Nama Ibu</td>
    <td><?= ucwords($ortu->nama_ibu) ?></td>
    </tr>

    <tr>
    <td>Tempat, Tanggal Lahir Ibu</td>
    <td><?= ucwords("$ortu->tmp_lahir_ibu, $ortu->tgl_lahir_ibu") ?></td>
    </tr>

    <tr>
    <td>Pendidikan Ibu</td>
    <td><?= $ortu->pend_ibu ?></td>
    </tr>

    

    </tbody>
    </table>
    
    </div>
	</div>
    </div>
</div>

<?php endif; ?>


<?php if(isset($pasutri)):
    
    ?>
    
    
    <div class="card">
        <div class="card-header">
            <strong class="card-title">#Detail - Data <?= $this->pegawai->cekSuami($pasutri->status); ?>
           </strong>
        </div>
        <div class="card-body">
    
    <div class="container">
        <div class="row">
        <table class="table table-sm">
        <tbody>
    
    
        <tr>
        <td>Nama <?= $this->pegawai->cekSuami($pasutri->status); ?></td>
        <td><?= ucwords($pasutri->nama) ?></td>
        </tr>
    
        <tr>
        <td>Tempat, Tanggal Lahir </td>
        <td><?= ucwords("$pasutri->tmp_lahir, $pasutri->tgl_lahir") ?></td>
        </tr>
    
        <tr>
        <td>Pendidikan</td>
        <td><?= $pasutri->pendidikan ?></td>
        </tr>
    
        <tr>
        <td>Status</td>
        <td><?= $this->pegawai->cekSuami($pasutri->status) ?></td>
        </tr>
    
        </tbody>
        </table>
        
        </div>
        </div>
        </div>
    </div>
    
    <?php endif; ?>


    



    <?php if(isset($pendidikan)):
    
    ?>
    
    
    <div class="card">
        <div class="card-header">
            <strong class="card-title">#Detail - Data Pendidikan
           </strong>
        </div>
        <div class="card-body">
    
    <div class="container">
        <div class="row">
        <table class="table table-sm">
        <tbody>
    
    
        <tr>
        <td>Tingkat Sekolah</td>
        <td><?= ucwords($pendidikan->sekolah) ?></td>
        </tr>
    
        <tr>
        <td>Jurusan</td>
        <td><?= ucwords($pendidikan->jurusan) ?></td>
        </tr>
    
        <tr>
        <td>Nama Sekolah</td>
        <td><b><?= $pendidikan->nama_sekolah ?></b></td>
        </tr>
    
        <tr>
        <td>Lokasi Sekolah</td>
        <td><?= ucwords($pendidikan->lokasi) ?></td>
        </tr>
    
        </tbody>
        </table>
        
        </div>
        </div>
        </div>
    </div>
    
    <?php endif; ?>
