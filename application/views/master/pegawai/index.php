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
		<strong class="card-title">#Data - Pegawai<a href="<?= site_url('pegawai/addpegawai'); ?>" class="btn btn-outline-success btn-sm float-right">Tambah
				Data Pegawai</a></strong>
	</div>
	<div class="card-body">

		<table id="table" class="table table-striped table-bordered display nowrap" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Pegawai</th>
					<th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telepon</th>
                    <th>Status</th>
                    <th>Email</th>
                    <th>Aksi</th>
				</tr>
			</thead>
			<tbody>
		<?php  $i = 1?>
			<?php foreach($employees as $employee): ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $employee->nama ?></td>
					<td><?= $employee->alamat ?></td>
                    <td><?= $employee->tgl_lahir ?></td>
                    <td><?= $employee->tmp_lahir ?></td>
                    <td>

					<?php 
					if($employee->jk == 0){
						echo 'Laki Laki';
					} elseif($employee->jk == 1){
						echo 'Perempuan';
					}
					
					?>
					
					</td>
                    <td><?= $employee->no_telp ?></td>
                    <td><?php 
					
					if($employee->status  == 0){
						echo 'Menikah';
					} elseif($employee->status  == 1){
						echo 'Belum Menikah';
					}
					
					
					?></td>
                    <td><?php if(empty($employee->email)){
                        echo 'Tidak Ada Email.';
                    }else {
                        echo $employee->email; 
                    }?></td>
					<td>
					<a href="<?= site_url('pegawai/edit/' . $employee->id); ?>" class="btn btn-primary btn-sm" href="">Edit</a>
					<a href="<?= site_url('pegawai/hapus/' . $employee->id); ?>" class="btn btn-danger btn-sm" href="">Hapus</a>
					</td>
				</tr>
				
		<?php $i++;endforeach; ?>

			</tbody>

		</table>

</div>
</div>