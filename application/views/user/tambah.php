<?php 
$pesan = $this->session->flashdata('pesan');
if(isset($pesan)): 
?>
<div class="alert alert-success" role="alert">
  <span id="pesan" style="cursor:pointer"><?= $this->session->flashdata('pesan') ?></span>
  </div>
<?php endif; ?>
<div class="row">
    <div class="col">
    <div class="card">
                            <div class="card-header"><strong>Tambah User</strong></div>
                            <div class="card-body card-block">
                                <form action="<?= site_url('dashboard/tambah'); ?>" method="POST">              
                               
                                <div class="text-danger"><?php echo form_error('username') ?></div>
                                <div class="text-danger"><?php echo form_error('nama') ?></div>
                                <div class="text-danger"><?php echo form_error('password') ?></div>
                                <div class="text-danger"><?php echo form_error('level') ?></div>
                                <div class="text-danger"><?php echo form_error('username') ?></div>
                                <div class="text-danger"><?php echo form_error('alamat') ?></div>
                                <div class="text-danger"><?php if(isset($error)) echo $error ?></div>

                                <div class="form-group"><label for="nama" class=" form-control-label">Nama Lengkap</label><input type="text" id="nama" name="nama" placeholder="Enter Your Full Name" class="form-control"></div>
                                <div class="form-group"><label for="username" class=" form-control-label">Username</label><input type="text" id="username" name="username" placeholder="Enter Your Username" class="form-control"></div>
                                <div class="form-group"><label for="password" class=" form-control-label">Password</label><input type="password" id="password" name="password" placeholder="Enter Your Password" class="form-control"></div>
                                
                                <div class="form-group"><label for="select" class=" form-control-label">Level</label>
                                <select name="level" id="select" class="form-control">
                                                <option hidden>Please select</option>
                                                <option value="0">Admin</option>
                                                <option value="1">Operator</option>
                                            </select></div>

                                <div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="email" id="email" name="email" placeholder="Enter Your Email" class="form-control"></div>
                                <div class="form-group"><label for="alamat" class=" form-control-label">Alamat</label><input type="alamat" id="alamat" name="alamat" placeholder="Enter Your Alamat" class="form-control"></div>
                                        
                                <div class="float-right mt-3">
                             
                                <a href="<?= site_url('dashboard'); ?>" class="btn btn-outline-danger">Cancel</a>
                                <button type="submit" class="btn btn-success">Simpan Profile</button>
                                </div>
                                </form>
                                
                                </div>
                        </div>
    </div>
</div>