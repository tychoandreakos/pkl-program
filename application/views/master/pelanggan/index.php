<?php 
$pesan = $this->session->flashdata('sukses');
if(isset($pesan)): 
?>
<div class="alert alert-success" role="alert">
	<span>
		<?= $this->session->flashdata('sukses') ?></span>
</div>
<?php endif; ?>

<div class="card">

	<div class="card-header">
		<strong class="card-title">#Data - Pelanggan <a href="<?= site_url('pelanggan/addpelanggan'); ?>" class="btn btn-outline-success btn-sm float-right">Tambah
				Data Pelanggan</a></strong>
	</div>
	<div class="card-body">


		<table id="table" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
				</tr>
			</thead>
			<tbody>
		<?php  $i = 1?>
			<?php foreach($costumers as $costumer): ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $costumer->nama ?></td>
					<td><?= $costumer->alamat ?></td>
					<td><?= $costumer->no_telp ?></td>
					<td>
					<a href="<?= site_url('pelanggan/edit/') . $costumer->id; ?>" class="btn btn-primary btn-sm" href="">Edit</a>
					<a href="<?= site_url('pelanggan/hapus/') . $costumer->id; ?>" class="btn btn-danger btn-sm" href="">Hapus</a>
					</td>
				</tr>
				
		<?php $i++;endforeach; ?>

			</tbody>

		</table>


	</div>
</div>
