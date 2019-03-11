<?php 
$pesan = $this->session->flashdata('sukses');
$gagal = $this->session->flashdata('gagal');
if(isset($pesan)): 
?>
<div class="flash-data" data-flashdata="<?= $pesan ?>"></div>
<?php endif; ?>

<?php
if(isset($gagal)): 
?>
<div class="flash-data-gagal" data-flashdata="<?= $gagal ?>"></div>
<?php endif; ?>


<div class="card">

	<div class="card-header">
		<strong class="card-title">#Data - Riwayat Pekerjaan<a href="<?= site_url('anak/create/'. $this->uri->segment('3')) ?>" class="btn btn-outline-success btn-sm float-right">Tambah
				Data Anak</a></strong>
	</div>
	<div class="card-body">

		<table id="table" class="table table-striped table-bordered display nowrap" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Perusahaan</th>
					<th>Lokasi</th>
                    <th>Jabatan</th>
                    <th>Periode</th>
                    <th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php $i=1 ?>
			<?php foreach($data as $d): ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= ucwords($d->nama_perusahaan) ?></td>
					<td><?= ucwords($d->lokasi_perusahaan) ?></td>
                    <td><?= ucwords($d->jabatan) ?></td>
                    <td><?= ucwords($d->periode) ?></td>
                 
					<td>
					<a href="<?= site_url('pegawai/data-pekerjaan/edit/' . $d->id_pekerjaan); ?>" class="btn btn-primary btn-sm">Edit</a>
					<a href="<?= site_url('pegawai/data-pekerjaan/hapus/' . $d->id_pekerjaan); ?>" class="hapus btn btn-danger btn-sm">Hapus</a>
					</td>
				</tr>

			<?php $i++ ?>	
		<?php endforeach; ?>

			</tbody>

		</table>

</div>
</div>