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
		<strong class="card-title">#Data - Barang <a href="<?= site_url('barang/addbarang'); ?>" class="btn btn-outline-success btn-sm float-right">Tambah
				Data Barang</a></strong>
	</div>
	<div class="card-body">


		<table id="table" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Barang</th>
					<th>Harga</th>
                    <th>Aksi</th>
				</tr>
			</thead>
			<tbody>
		<?php  $i = 1?>
			<?php foreach($items as $item): ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $item->nama ?></td>
					<td>Rp <?= number_format($item->harga,0,',','.'); ?></td>
					<td>
					<a href="<?= site_url('barang/edit/') . $item->id ?>" class="btn btn-primary btn-sm" href="">Edit</a>
					<a href="<?= site_url('barang/hapus/' . $item->id) ?>" class="btn btn-danger btn-sm" href="">Hapus</a>
					</td>
				</tr>
				
		<?php $i++;endforeach; ?>

			</tbody>

		</table>


	</div>
</div>
