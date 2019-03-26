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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/landing/aos.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/landing/owl.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/landing/style.css'); ?>">
    <link rel="shortcut icon" href="/public_html/images/icons8-tire-iron-480.png" type="image/x-icon">
    <title>PT. Nur Rahayu Metal</title>
  </head>
  <body>

  <header>
    <div class="header-img">
      <div class="fill">
        <div class="layer"></div>
      </div>

      

      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark float-panel" data-top="0" data-scroll="600">

        <div class="container">
          <a class="navbar-brand" href="#"><img src="https://www.tokoweb.co/wp-content/uploads/2015/10/logotokoweb-white.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#"><span class="navbar-icon fa fa-home"></span> Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"><span class="navbar-icon fa fa-user"></span> Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><span class="navbar-icon fa fa-truck"></span> Cara Pesan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontak-kami.html"><span class="navbar-icon fa fa-phone"></span> Kontak Kami</a>
              </li>
            </ul>
          </div>
        </div>

      </nav>
      
      <div class="container" data-aos="fade-up">
        <div class="header-text-ad ml-4" style="">

          <h4 class="header-text-h4">Bikin Web Profesional Murah? Percayakan pada Kami Sekarang Juga.</h4>
          <p class="header-text-p">Tokoweb.co menyediakan jasa pembuatan website, aplikasi mobile, dan internet
            marketing, sesuai kebutuhan bisnis anda dengan harga murah kualitas mewah, Bandung.</p>
          <div class="btn btn-primary header-button"><span class="header-button-icon float-left fa fa-shopping-bag"></span>
            Paket & Harga</div>
          <div class="btn btn-success header-button"><span class="header-button-icon float-left fab fa-whatsapp"></span>
            Hubungi WhatApp</div>
        </div>
      </div>

    </div>

  

  </header>

  

  <!-- main -->
  <main>
    <div class="container mt-3">



      <div id="owl">
        <div class="item"><img src="<?= base_url('assets/images/') ?>img/bengkel/gambar1.jpg" alt="Gambar Bengkel"></div>
        <div class="item"><img src="<?= base_url('assets/images/') ?>img/bengkel/gambar10.jpg" alt="Gambar Bengkel"></div>
        <div class="item"><img src="<?= base_url('assets/images/') ?>img/bengkel/gambar11.jpg" alt="Gambar Bengkel"></div>
        <div class="item"><img src="<?= base_url('assets/images/') ?>img/bengkel/gambar12.jpg" alt="Gambar Bengkel"></div>
        <div class="item"><img src="<?= base_url('assets/images/') ?>img/bengkel/gambar2.jpg" alt="Gambar Bengkel"></div>
        <div class="item"><img src="<?= base_url('assets/images/') ?>img/bengkel/gambar3.jpg" alt="Gambar Bengkel"></div>
        <div class="item"><img src="<?= base_url('assets/images/') ?>img/bengkel/gambar4.jpg" alt="Gambar Bengkel"></div>
        <div class="item"><img src="<?= base_url('assets/images/') ?>img/bengkel/gambar5.jpg" alt="Gambar Bengkel"></div>
      </div>
    </div>

      <!-- menu -->
      <!-- <div class="menu sticky-top">
        <div class="container">
          <div class="row">
            <div class="col col-md-3"> <img src="https://www.tokoweb.co/wp-content/uploads/2015/10/logotokoweb-white.png" alt=""></div>
            <div class="col col-md-3"> <img src="" alt=""></div>
            <div class="col col-md-3"> <img src="" alt=""></div>
            <div class="col col-md-3"> <a href="" class="btn btn-success mt-4" style="width: 80%">Pesan Sekarang</a></div>
          </div>
       
      </div>
      </div> -->

      <!-- title -->
      <div class="container">
      <div class="main-title text-center mt-5" >
        <h4 class="title-h4">Selamat Datang Di Tokoweb.co</h4>
        <h3 class="title-h2">KENAPA TOKOWEB PANTAS MENJADI MITRA BISNIS ANDA?</h3>
      </div>

      <!-- row -->
      <div class="p-3">
        <div class="row mt-4">
          <div class="col col-md-6 ">
            <div class="row">
              <div class="col col-sm-11 col-lg-1 col-md-1 col-11">
                <span class="main-icon fa fa-cart-arrow-down"></span>
              </div>
              <div class="col col-sm-12 col-lg-10 col-md-10 col-12">
                <h5 class="title-h5">MURAH DENGAN KUALITAS MEWAH</h5>
                <p class="text-justify">Kami memahami kebutuhan anda saat ini, dengan membuat website harga terjangkau
                  namun bisa memberikan
                  hasil & pendapatan maksimal. Kami pastikan membuat website di Tokoweb.co adalah bentuk investasi yang
                  tepat untuk bisnis anda.</p>
              </div>
            </div>
          </div>

          <div class="col col-md-6">
            <div class="row">
              <div class="col col-sm-11 col-lg-1 col-md-1 col-11 ml-4">
                <span class="main-icon fa fa-building"></span>
              </div>
              <div class="col col-sm-12 col-lg-10 col-md-10 col-12">
                <h5 class="title-h5">MURAH DENGAN KUALITAS MEWAH</h5>
                <p class="text-justify">Kami memahami kebutuhan anda saat ini, dengan membuat website harga terjangkau
                  namun bisa memberikan
                  hasil & pendapatan maksimal. Kami pastikan membuat website di Tokoweb.co adalah bentuk investasi yang
                  tepat untuk bisnis anda.</p>
              </div>
            </div>
          </div>

        </div>

        <div class="row">


          <div class="col col-md-6">
            <div class="row">
              <div class="col col-sm-11 col-lg-1 col-md-1 col-11">
                <span class="main-icon fa fa-archive"></span>
              </div>
              <div class="col col-sm-12 col-lg-10 col-md-10 col-12">
                <h5 class="title-h5">MURAH DENGAN KUALITAS MEWAH</h5>
                <p class="text-justify">Kami memahami kebutuhan anda saat ini, dengan membuat website harga terjangkau
                  namun bisa memberikan
                  hasil & pendapatan maksimal. Kami pastikan membuat website di Tokoweb.co adalah bentuk investasi yang
                  tepat untuk bisnis anda.</p>
              </div>
            </div>
          </div>

          <div class="col col-md-6">
            <div class="row">
              <div class="col col-sm-11 col-lg-1 col-md-1 col-11 ml-4">
                <span class="main-icon fa fa-bullhorn"></span>
              </div>
              <div class="col col-sm-12 col-lg-10 col-md-10 col-12">
                <h5 class="title-h5">MURAH DENGAN KUALITAS MEWAH</h5>
                <p class="text-justify">Kami memahami kebutuhan anda saat ini, dengan membuat website harga terjangkau
                  namun bisa memberikan
                  hasil & pendapatan maksimal. Kami pastikan membuat website di Tokoweb.co adalah bentuk investasi yang
                  tepat untuk bisnis anda.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <!-- panel -->
    <!-- <div class="jumbotron jumbotron-fluid bg-blue">
      <div class="container">
      <div class="row">

        <div class="col col-md-6">
          <h4 class="text-white">PT Nur Rahayu Metal</h4>
        </div>

        <div class="col col-md-6">
          <img src="img/2.png" alt="Landing-Mobile">
        </div>
      </div>
    </div>
    </div> -->

    <!-- call-us -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1.jpg"></div>
    <div class="call-us mt-2 mb-2">

      <div class="call-us-content">
        <h4 class="call-us-title">Ada Yang Bisa Kami Bantu?</h4>
        <p class="align-center">Customer service kami siap melayani Anda setiap hari 7 hari seminggu,
          Setiap hari buka pukul 7:00 s.d. 24:00.</p>
        <br>
        <span>(021) 2254 2502</span>
        <div class="clear"></div>
        <br>
        <a href="" class="btn btn-primary header-button">Pesan Sekarang</a>
      </div>

    </div>

  </main>



  <!-- footer -->
  <footer>

    <div class="container">
      <div class="row mt-4">
        <div class="col col-12 col-sm-6 col-md-3 mb-3">
          Tokoweb.co - Solusi tepat untuk anda yang ingin sukses berbisnis online. Tokoweb.co adalah Jasa Pembuatan
          Website, Aplikasi Mobile, dan Internet Marketing dengan harga terjangkau di Bandung.
        </div>

        <div class="col col-12 col-sm-6 col-md-3 mb-3">
          <h5>Layanan Bantuan</h5>
          <div class="divider"></div>
          <ul class="footer-link">
            <li><span class="fa fa-phone"></span> 081-2222-78458</li>
            <li><span class="fa fa-phone-square"></span> 022-5441-2860</li>
            <li><span class="fa fa-envelope"></span> mail@tokoweb.co</li>
            <li><span class="fa fa-map-marker"></span> Jarrdin Apartemen B-43 Commercial Area, Cihampelas, Bandung</li>
            <li><span class="fa fa-calendar"></span> Senin - Sabtu, 09:00 - 17:00 </li>
          </ul>
        </div>

        <div class="col col-12 col-sm-6 col-md-3 mb-3">
          <h5>Quick Link</h5>
          <div class="divider"></div>
          <ul class="footer-link">
            <li class="footer-list"><a href="">Paket & Harga</a></li>
            <li class="footer-list"><a href="">Demo Website</a></li>
            <li class="footer-list"><a href="">Cara Order</a></li>
            <li class="footer-list"><a href="">Kontak Kami</a></li>
            <li class="footer-list"><a href="">Tentang Kami</a></li>
          </ul>
        </div>

        <div class="col col-12 col-sm-6 col-md-3 mb-3">
          <h5>Menu Lainnya</h5>
          <div class="divider"></div>
          <ul class="footer-link">
            <li class="footer-list"><a href="">Program Reseller</a></li>
            <li class="footer-list"><a href="">Lowongan Kerja</a></li>
            <li class="footer-list"><a href="">Persyaratan Layanan</a></li>
            <li class="footer-list"><a href="">F.A.Q – Tanya Jawab</a></li>
          </ul>
        </div>

      </div>


      <div class="mt-4 mb-4">
        <div class="row ml-2 mr-2">
          <div class="col col-6 col-sm-6 col-md-3">
            <div class="row">
              <div class="col col-3 col-md-2">
                <span class="fa fa-phone fa-2x"></span>
              </div>
              <div class="col col-9 col-md-10">
                <span>Nomor Telepon</span>
                <p>(022) 7628394</p>
              </div>
            </div>
          </div>

          <div class="col col-6 col-sm-6 col-md-3">
            <div class="row">
              <div class="col col-3 col-md-2">
                <span class="fab fa-whatsapp fa-2x"></span>
              </div>
              <div class="col col-9 col-md-10">
                <span>WhatsApp</span>
                <p>+62 87839493898</p>
              </div>
            </div>
          </div>

          <div class="col col-6 col-sm-6 col-md-3">
            <div class="row">
              <div class="col col-3 col-md-2">
                <span class="fa fa-envelope fa-2x"></span>
              </div>
              <div class="col col-9 col-md-10">
                <span>Email Kami</span>
                <p>boscare@bengkelbos.co.id</p>
              </div>
            </div>
          </div>

          <div class="col col-6 col-sm-6 col-md-3">
            <div class="row">
              <div class="col col-3 col-md-2">
                <span class="fab fa-blackberry fa-2x"></span>
              </div>
              <div class="col col-9 col-md-10">
                <span>BBM</span>
                <p>(022) 7628394</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <span>Melayani: </span>
      <p class="detail">&nbspAlfa Romeo · Aston Martin · Audi · Bentley · BMW · Cadillac · Chery · Chevrolet · Chrysler
        · Citroen · Daewoo · Daihatsu · Datsun · Dodge · Ferrari · Fiat · Ford · Geely · Honda · Hummer · Hyundai ·
        Infiniti · Isuzu · Jaguar · Jeep · KIA · Lamborghini · Land Rover · Lexus · Maserati · Mazda · McLaren ·
        Mercedes · Mini · Mitsubishi · Nissan · Opel · Peugeot · Porsche · Proton · Renault · Rolls Royce · Smart ·
        SSangYong · Subaru · Suzuki · Tata · Timor · Toyota · Volkswagen · Volvo</p>
      <p class="copyright text-center">© 2019 PT Nur Rahayu Metal.</p>
    </div>

  </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/js/parallax.js') ?>"></script>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <script src="<?= base_url('assets/js/index.js') ?>"></script>
    <script src="<?= base_url('assets/js/float.js') ?>"></script>
    <script>
   AOS.init();
 </script>
  <script>
    
    $(document).ready(function () {

      $("#owl").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 5,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

      });

    });
  </script>
  </body>
</html>