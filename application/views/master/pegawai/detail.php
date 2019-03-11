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
    <td><?= $pegawai->nik ?></td>
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

<?php if(isset($pegawai->nama_ayah)):
    
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
    <td><?= ucwords($pegawai->nama_ayah) ?></td>
    </tr>

    <tr>
    <td>Tempat, Tanggal Lahir Ayah</td>
    <td><?= ucwords("$pegawai->tmp_lahir_ayah, $pegawai->tgl_lahir_ayah") ?></td>
    </tr>

    <tr>
    <td>Pendidikan Ayah</td>
    <td><?= $pegawai->pend_ayah ?></td>
    </tr>

    <tr>
    <td>Nama Ibu</td>
    <td><?= ucwords($pegawai->nama_ibu) ?></td>
    </tr>

    <tr>
    <td>Tempat, Tanggal Lahir Ibu</td>
    <td><?= ucwords("$pegawai->tmp_lahir_ibu, $pegawai->tgl_lahir_ibu") ?></td>
    </tr>

    <tr>
    <td>Pendidikan Ibu</td>
    <td><?= $pegawai->pend_ibu ?></td>
    </tr>

    

    </tbody>
    </table>
    
    </div>
	</div>
    </div>
</div>

<?php endif; ?>


<?php if(isset($pegawai->nama_pasutri)):
    
    ?>
    
    
    <div class="card">
        <div class="card-header">
            <strong class="card-title">#Detail - Data <?= $this->pegawai->cekSuami($pegawai->status_pasutri); ?>
           </strong>
        </div>
        <div class="card-body">
    
    <div class="container">
        <div class="row">
        <table class="table table-sm">
        <tbody>
    
    
        <tr>
        <td>Nama <?= $this->pegawai->cekSuami($pegawai->status_pasutri); ?></td>
        <td><?= ucwords($pegawai->nama_pasutri) ?></td>
        </tr>
    
        <tr>
        <td>Tempat, Tanggal Lahir </td>
        <td><?= ucwords("$pegawai->tmp_lahir, $pegawai->tgl_lahir_pasutri") ?></td>
        </tr>
    
        <tr>
        <td>Pendidikan</td>
        <td><?= $pegawai->pendidikan_pasutri ?></td>
        </tr>
    
        <tr>
        <td>Status</td>
        <td><?= $this->pegawai->cekSuami($pegawai->status_pasutri) ?></td>
        </tr>
    
        </tbody>
        </table>
        
        </div>
        </div>
        </div>
    </div>
    
    <?php endif; ?>


    



    <?php if(isset($pegawai->sekolah)):
    
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
        <td><?= ucwords($pegawai->sekolah) ?></td>
        </tr>
    
        <tr>
        <td>Jurusan</td>
        <td><?= ucwords($pegawai->jurusan) ?></td>
        </tr>
    
        <tr>
        <td>Nama Sekolah</td>
        <td><b><?= $pegawai->nama_sekolah ?></b></td>
        </tr>
    
        <tr>
        <td>Lokasi Sekolah</td>
        <td><?= ucwords($pegawai->lokasi) ?></td>
        </tr>
    
        </tbody>
        </table>
        
        </div>
        </div>
        </div>
    </div>
    
    <?php endif; ?>


    <?php if(isset($anak)):
    
    ?>
    
    
    <div class="card">
        <div class="card-header">
            <strong class="card-title">#Detail - Data Anak
           </strong>
        </div>
        <div class="card-body">
    
    <div class="container">
        <div class="row">
        <table class="table table-sm">
        <tbody>
    
        <?php foreach($anak as $a) : ?>
    
        <tr>
        <td>Nama Anak</td>
        <td><?= ucwords($a->nama_anak) ?></td>
        </tr>
    
        <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td><?= ucwords("$a->tmp_lahiranak, $a->tgl_lahiranak") ?></td>
        </tr>
    
        <tr>
        <td>Pendidikan</td>
        <td><b><?= $a->pendidikananak ?></b></td>
        </tr>
    
        <tr>
        <td>Jenis Kelamin</td>
        <td><?= ucwords($a->jk) ?></td>
        </tr>

        <tr>
        <td>Status</td>
        <td><?= ucwords($a->status) ?></td>
        </tr>

      <td colspan="2">
        <br>
      </td>
    
    <?php endforeach ?>
        </tbody>
        </table>
        
        </div>
        </div>
        </div>
    </div>
    
    <?php endif; ?>
