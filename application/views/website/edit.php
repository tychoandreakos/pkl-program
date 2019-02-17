
<div class="card">
	<div class="card-header">
		<strong class="card-title">#Edit Post <a href="<?= site_url('post'); ?>" class="btn btn-outline-primary  btn-sm float-right">Kembali</a></strong>
	</div>
	<div class="card-body">
        <div class="d-flex justify-content-center">
        <img src="<?= site_url('upload/post/'. $users->avatar) ?>" class="img-thumbnail mb-3" style="width:350px">
        </div>
		<form action="<?=  base_url('post/update/' . $id); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="hidden" name="author" value="<?=  $users->author ?>">
        <input type="hidden" name="date" value="<?=  $users->date ?>">
        <input type="hidden" name="oldImage" value="<?=  $users->avatar ?>">
            <input
             type="text" id="judul" class="form-control" placeholder="Judul Post Baru" name="judul" value="<?= $users->title ?>">
			<div class="mt-2"></div>
			<textarea class="ckeditor" id="ckedtor" name="isi"><?= $users->isi; ?></textarea>
			<div class="mt-2"></div>
			<label for="" class="form-control-label">Replace Gambar:</label>&nbsp;<input type="file" name="avatar">
			<button type="submit" class="btn btn-success float-right">Ubah Postingan</button>
	</div>
</div>

</form>
<script src="<?= site_url('assets/ckeditor/ckeditor.js'); ?>"></script>