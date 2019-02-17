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
		<strong class="card-title">#Settings</strong>
	</div>
	<div class="card-body">
<form action="settings" method="post">
<table class="table">
  <tbody>
    <tr>
      <td>No Telepon</td>
      <td><input placeholder="No Telp 1" type="text" class="form-control" name="telp1" value="<?= $settings->telp1 ?>"></td>
      <td><input placeholder="No Telp 2" type="text" class="form-control" name="telp2" value="<?= $settings->telp2 ?>"></td>
    </tr>

    <tr>
      <td>Email</td>
      <td><input placeholder="Email 1" type="text" class="form-control" name="email1" value="<?= $settings->email1 ?>"></td>
      <td><input placeholder="Email 2" type="text" class="form-control" name="email2" value="<?= $settings->email2 ?>"></td>
    </tr>
    
    <tr>
      <td><h3 style="color:#1da1f2" class="ti-twitter"></h3></td>
      <td colspan="2"><input placeholder="Masukkan akun twitter" type="text" class="form-control" name="twitter" value="<?= $settings->twitter ?>"></td>
    </tr>

    <tr>
      <td><h3 style="color: #3b5998" class="ti-facebook"></h3></td>
      <td colspan="2"><input placeholder="Masukkan akun facebook" type="text" class="form-control" name="facebook" value="<?= $settings->facebook ?>"></td>
    </tr>

    <tr>
      <td><h3 style="color: #833ab4" class="ti-instagram"></h3></td>
      <td colspan="2"><input placeholder="Masukkan akun instagram" type="text" class="form-control" name="instagram" value="<?= $settings->instagram ?>"></td>
    </tr>

    <tr>
      <td >Display Lead</td>
      <td colspan="2">
      <input placeholder="Judul Display" type="text" class="form-control" name="display" value="<?= $settings->display ?>">
      <br>
      <textarea name="desc" class="form-control" cols="30" rows="5" placeholder="Description Of Display"><?= $settings->desc ?></textarea>
      </td>
    </tr>


  </tbody>
</table>
<div class="float-right">
<a href="<?= site_url('dashboard') ?>" class="btn btn-outline-danger">Batal</a>
<button type="submit" class="btn btn-outline-success">Simpan Pengaturan</button>
</div>
</form>

	</div>
</div>