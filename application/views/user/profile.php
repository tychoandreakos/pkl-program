<?php 
$pesan = $this->session->flashdata('pesan');
if(isset($pesan)): 
?>
<div class="alert alert-success" role="alert">
  <span id="pesan" style="cursor:pointer"><?= $this->session->flashdata('pesan') ?></span>
  </div>
<?php endif; ?>

<div class="card">
                        <div class="card-header">
                            <strong class="card-title"><?= $user['nama']; ?></strong>
                        </div>
                        <div class="card-body">
                           
                           <div class="row">
                            <div class="col-lg-3 col-md-3">
                            <img src="<?= site_url('upload/avatar/') . $user['avatar']; ?>" alt="Image"></div>
                            <div class="col-lg-9 col-md-9">
                                <table class="table table-sm">
    <tbody>
    
        <tr>
        <td>Username</td>
        <td><?= $user['username'] ?></td>
        </tr>

        <tr>
        <td>Email</td>
        <td><a href="mailto:<?= $user['email'] ?>"><?= $user['email']; ?></a></td>
        </tr>

        <tr>
        <td>Level</td>
        <td><b><?= $user['level'] ?></b></td>
        </tr>

        <tr>
        <td>Status</td>
        <td><span id="ready" class="btn btn-success btn-sm"><?= $status; ?></span></td>
        </tr>

        <tr>
        <td>Tanggal Join</td>
        <td><?= $user['tgl_join'] ?></td>
        </tr>

        <tr>
        <td>Alamat</td>
        <td><?= $user['alamat'] ?></td>
        </tr>
    </tbody>
    </table>


    <a href="<?= site_url('dashboard/edit/') . $this->session->userdata('username'); ?>" class="btn btn-outline-success float-right">Edit profile</a>   
                            </div>
                           </div>
                            
                        </div>
                    </div>