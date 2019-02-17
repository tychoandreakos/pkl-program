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
		<strong class="card-title">#POST <a href="<?= site_url('post/addpost'); ?>" class="btn btn-outline-success btn-sm float-right">Tambah
				POST</a></strong>
	</div>
	<div class="card-body">
		<table class="table table-striped"">
                                <thead>
                                    <tr>
                                        <th scope="
		 col">#</th>
			<th scope="col">Title</th>
			<th scope="col">Author</th>
			<th scope="col">Date</th>
			<th scope="col">Action</th>
			</tr>
			</thead>
			<tbody>
            <?php $i = 1; ?>
				<?php foreach($posts as $post): ?>
				<tr>
					<th scope="row"><?= $i; ?></th>
					<td><a href=""><?= substr($post->title, 0 ,20) ?></a></td>
					<td><a href="<?= site_url('dashboard/profile/') . $post->author ?>"><?= $post->author ?></a></td>
					<td><?= $post->date ?></td>
					<td><a href="<?= site_url('post/update/') . $post->id ?>" class="btn btn-outline-primary btn-sm"><i class="ti-reload"></i></a>
					<a href="<?= site_url('post/hapus/') . $post->id; ?>" class="btn btn-outline-danger btn-sm"><i class="ti-trash"></i></a> </td>
				</tr>
                <?php  $i++ ?>
				<?php endforeach; ?>

			</tbody>
		</table>


	</div>
</div>