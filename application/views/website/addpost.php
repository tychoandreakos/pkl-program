<div class="card">
	<div class="card-header">
		<strong class="card-title">#New Post <a href="<?= site_url('post'); ?>" class="btn btn-outline-primary  btn-sm float-right">Kembali</a></strong>
	</div>
	<div class="card-body">
		<form action="<?=  base_url('barang/addbarang'); ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="author" value="<?= $user['username'] ?>">
			<input type="text" id="judul" class="form-control" placeholder="Judul Post Baru" name="judul">
			<div class="mt-2"></div>
			<textarea class="ckeditor" id="ckedtor" name="isi"></textarea>
			<div class="mt-2"></div>
			<label for="" class="form-control-label">Upload Gambar:</label>&nbsp;<input type="file" name="avatar">
			<button type="submit" class="btn btn-success float-right">Simpan</button>
	</div>
</div>

</form>