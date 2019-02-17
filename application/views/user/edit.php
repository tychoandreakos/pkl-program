<div class="row">
    <div class="col">
    <div class="card">
                            <div class="card-header"><strong>Edit Profile</strong><small> <?= $user['username'] ?></small></div>
                            <div class="card-body card-block">
                                <form action="<?= base_url('dashboard/upload'); ?>" method="POST" enctype="multipart/form-data">
                                

                                <div class="justify-content-center">
                                <img src="<?= site_url('upload/avatar/'). $user['avatar']; ?>" style="width: 200px" class="offset-5">
                              
                                </div>
                                
                                <div class="form-group"><input type="hidden" id="username" name="username" value="<?= $user['username'] ?>" placeholder="Enter your username" class="form-control"></div>
                                <div class="form-group"><label for="nama" class=" form-control-label">Nama Lengkap</label><input type="nama" id="nama" name="nama" value="<?= $user['nama'] ?>" placeholder="Enter Your Full Name" class="form-control"></div>
                                <div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="email" id="email" name="email" value="<?= $user['email'] ?>" placeholder="Enter Your Email" class="form-control"></div>
                                <div class="form-group"><label for="alamat" class=" form-control-label">Alamat</label><input type="text" id="alamat" placeholder="Enter Your Alamat" value="<?= $user['alamat'] ?>" name="alamat" class="form-control"></div>
                                <div class="form-group"><label class=" form-control-label">Upload Avatar Baru</label><input class="form-control-file" type="file" name="avatar"></div>
                                <div class="form-group"><input type="hidden" name="oldimage" value="<?= $user['avatar'] ?>"></div>

                                <div class="float-right mt-3">
                                <a href="<?=  site_url('dashboard/profile/' . $user['username']); ?>" class="btn btn-danger">Batal</a>
                                <button type="submit" class="btn btn-success">Simpan Profile</button>
                                </div>
                                </form>
                                
                                </div>
                        </div>
    </div>
</div>