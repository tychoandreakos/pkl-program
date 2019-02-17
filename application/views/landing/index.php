<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/landing/bootstrap.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/landing/aos.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/landing/style.css'); ?>">
    <link rel="shortcut icon" href="/public_html/images/icons8-tire-iron-480.png" type="image/x-icon">
    <title>PT. Nur Rahayu Metal</title>
  </head>
  <body>

      <div class="topbar">
        <div class="container">
        <div class="row">
          <div class="col p-2">
              <p><span class="fa fa-phone"></span> <?= $preferences->telp1 ?> / <?= $preferences->telp2 ?></p>  
              <p class="ml-2"><span class="fa fa-envelope"></span> <a href="mailto:<?= $preferences->email1 ?>"><?= $preferences->email1 ?></a> </p>
          </div>
            <div class="mr-auto"> 
              <div class="col mt-2">
                <ul>
                    <li><a href="twitter.com/<?= $preferences->twitter ?>"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="facebook.com/<?= $preferences->facebook ?>"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="instagram.com/<?= $preferences->instagram ?>"><span class="fa fa-instagram"></span></a></li>
                    <li><a href="whatsapp.com/"><span class="fa fa-whatsapp"></span></a></li>
                  </ul>
            </div></div>
         
        </div>
        </div>
        </div>

        
    <!-- navbar -->
         
    <div id="top" class="sticky-top">
    
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
        <a class="navbar-brand" href="#"><i class="fa fa-cog fa-1x putar"></i> PT Nur Rahayu Metal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Produk</a>
            </li>
          </ul>
        </div>
      </div>
      </nav>
      

    </div>
  
      <!-- gambar -->
      <img src="<?= base_url('assets/landing/') ?>images/7.jpg" style="width:100%">

      <!-- jumbotron-fluid -->
      <div class="jumbotron jumbotron-fluid bg-white"  data-aos="fade-up">
          <div class="container text-center">
            <h5 class="display-4"><?= $preferences->display ?></h5>  
            <p class="lead"><?= $preferences->desc ?>
            </p>
          </div>
        </div>

        <!-- card -->
        <div class="container">
            <div class="row mb-3">
                <!-- kolom 1 -->
								<?php foreach($posts as $post): ?>
			<div class="col d-flex">
				<div class="card">
					<img class="card-img-top" src="<?= base_url('upload/post/') . $post->avatar ; ?>" alt="Card image cap"
					 data-aos="zoom-in-up" data-aos-duration="500">
					<div class="card-body">
						<h5 class="card-title"><?= $post->title ?></h5>
						<p class="card-text"><?= $post->isi ?></p>
					</div>
				</div>
			</div>

      <?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row mb-3">';
?>
<?php endforeach; ?>
       
        </div>

       
        </div>

          <!-- feature -->
          <div class="jumbotron jumbotron-fluid feature text-white" >
            <div class="container" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <div class="row">
                <div class="col p-3">
                  <h4 class="mt-5 mb-3">Bengkel Las NRMetal</h4>
                  
                  <div class="ft-desc">
                      <h5 class=""><span class="fa fa-search ml-1"></span> Survei</h5>
                      <p>Kami senantiasa mengedepankan pelayanan terbaik kepada semua pelanggan dengan melakukan survei terhadap kebutuhan model yang diperlukan.</p>    
                  </div>

                  <div class="ft-desc">
                      <h5 class=""><span class="fa fa-paper-plane ml-1"> Antar</h5>
                      <p>Kami senantiasa bersedia untuk mengantar barang kepada pelanggan sesuai dengan lokasi yang telah disepakati bersama, hal itu kami lakukan untuk meningkatkan kualitas pelayanan.</p>    
                  </div>

                  <div class="ft-desc">
                      <h5 class=""><span class="fa fa-download ml-1"> Pasang</h5>
                      <p>Kami memasang pesanan pelanggan langsung ke lokasi yang sebelumnya telah melalui proses quality control terbaik yang kami lakukan, agar pelanggan merasa puas.</p>    
                  </div>

                  </div>

                <div class="col">
                  <img src="<?= base_url('assets/landing/'); ?>images/111.png" alt="">
                </div>


              </div>
            </div>
          </div>
        
              <!-- footer -->
              <footer class="container-fluid bg-grey py-5" style="margin-top: -50px">
                  <div class="container" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="row">
                              <div class="col-md-6 ">
                                 <div class="logo-part">
                                    <img src="images/bengkel.png" class="w-50 logo-footer" >
                                    <p>7637 Laurel Dr. King Of Prussia, PA 19406</p>
                                    <p style="margin-right: 50px">Menyediakan pagar besi minimalis, Harga pagar rumah minimalis, teralis rumah minimalis, harga pintu besi, harga kanopi besi, harga pagar minimalis, model pagar rumah minimalis.</p>
                                 </div>
                              </div>
                              <div class="col-md-6 px-4">
                                 <h6> About NRMetal</h6>
                                 <p>Anda dapat menghubungi Kami / Order dengan cara KLIK tombol yang tersedia dibawah ini. </p>
                                 <a href="#" class="btn-footer"> More Info </a><br>
                                 <a href="#" class="btn-footer"> Contact Us</a>
                              </div>
                           </div>
                        </div>
                      
                              <div class="col-md-6 ">
                                 <h6> Newsletter</h6>
                                 <div class="social">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                 </div>
                                 <form class="form-footer my-3">
                                    <input type="text"  placeholder="search here...." name="search">
                                    <input type="button" value="Go" >
                                 </form>
                                 <p>Made By ER</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>

           <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="<?= base_url('assets/js/index.js') ?>"></script>
  </body>
</html>