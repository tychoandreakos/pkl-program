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
		<strong class="card-title">#Data - Pegawai<a href="<?= site_url('pegawai/addpegawai'); ?>" class="btn btn-outline-success btn-sm float-right">Tambah
				Data Pegawai</a></strong>
	</div>
	<div class="card-body">

		<table id="table" class="table table-striped table-bordered display nowrap" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Pegawai</th>
					<th>Nama Pegawai</th>
					<th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
				</tr>
			</thead>
			<tbody>
		<?php  $i = 1?>
			<?php foreach($employees as $employee): ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $employee->id  ?></td>
					<td><?= ucwords($employee->nama) ?></td>
					<td><?= ucwords($employee->alamat) ?></td>
                    <td><?= ucwords($this->pegawai->jenisKelamin($employee->jk)) ?></td>
                 
					<td>
					<a href="<?= site_url('pegawai/detail/') . $employee->id; ?>" class="btn btn-success btn-sm">Detail</a>
					<a href="<?= site_url('pegawai/edit/' . $employee->id); ?>" class="btn btn-primary btn-sm">Edit</a>
					<a href="<?= site_url('pegawai/hapus/' . $employee->id); ?>" class="hapus btn btn-danger btn-sm">Hapus</a>
					</td>
				</tr>
				
		<?php $i++;endforeach; ?>

			</tbody>

		</table>

</div>
</div>