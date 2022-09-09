<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<!-- Import File CSS Internal -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/layoutweb.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/dropdown.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/mediasocial.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/scrool.css">
  <!-- Import File CSS Untuk Navbar -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- Import File CSS Untuk Media Sosial -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <!-- Import File Javascript Internal Dan External -->
  <script src="<?php echo base_url().'assets';?>/js/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <!-- Import File JS Untuk Navbar -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!--  -->
</head>
<body>
  <!-- Header -->
  <div class="wrapper">
    <header>
     <nav class="navbar navbar-expand-sm bg-success circle navbar-hover navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand" href="#"><img src="<?php echo base_url().'assets';?>/img/logo sangkuriang.png" style="width: 40px;"><strong><span style="color: #eccc68; font-family: Times, Helvetica, sans-serif; font-size: 20pt;"> Sindang </span></strong> <strong><span style="color: #dfe4ea; font-family: Times, Helvetica, sans-serif; font-size: 20pt;"> Sari </span></strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home');?>"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('about');?>"><i class="far fa-address-book"></i> About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('gallery');?>"><i class="far fa-images"></i> Gallery</a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fas fa-info"></i> Informasi
            </a>
            <div class="dropdown-menu sm-menu">
             <a class="dropdown-item" href="<?php echo site_url('pendaftaran');?>"><i class="fas fa-user-plus"></i> Pendaftaran</a>
             <a class="dropdown-item" href="<?php echo site_url('Pemesanan');?>"><i class="fas fa-shopping-cart"></i>Pemesanan</a>
             <a class="dropdown-item" href="<?php echo site_url('Tracking');?>"><i class="fas fa-map-marker-alt"></i> Tracking</a>
             <a class="dropdown-item" href="<?php echo site_url('Berita');?>"><i class="far fa-newspaper"></i> Berita</a>
           </div>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('login/logout');?>"><i class="fas fa-door-closed"></i> Logout</span></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<br>
<section class="welcome_about">
  <div class="container">
    <h2>Profil</h2>
    <hr class="my-4">
    <div class="main-wrapper">
      <div class="main"> 
        <div class="sidebar"> 
          <div class="row">
            <div class="col-md-7">
              <p style="text-align: justify;"><i class="fa fa-forward" aria-hidden="true"></i> Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas karunia dan hidayah-Nya,
                sehingga kita semua dapat memberikan informasi yang bermanfaat bagi sesama makhluk.
                Apapun bentuk dan sumbangsih yang kita berikan, jika dilandasi niat yang tulus tanpa memandang imbalan
                apapun akan menghasilkan mahakarya yang agung untuk bekal kita dan generasi setelah kita.
                Forum merupakan wadah atau tempat pertemuan sebuah komunitas yang memiliki persamaan minat dan tujuan untuk bertukar pikiran suatu topik atau masalah secara bebas yang berkaitan dengan forum tersebut.
              </p>
              <p style="text-align: justify;"><i class="fa fa-forward" aria-hidden="true"></i> Hal ini seiring dengan penguasaan teknologi untuk dimanfaatkan sebaik mungkin,
                sehingga menciptakan sebuah solusi dan mempermudah dalam berinteraksi.
              </p>
            </div>
            <div class="col-md-5">
              <div class="card" style="width: 18rem;">
                <a href="<?php echo base_url().'assets';?>/img/logo sangkuriang.png" class="fancybox" rel="ligthbox">
                <img src="<?php echo base_url().'assets';?>/img/logo sangkuriang.png" class="card-img-top rounded-circle border border-dark" class="zoom img-fluid" alt="logo" width="250" height="250">
                </a>
                <div class="card-footer">
                  <p class="card-text">Logo Budidaya Lele Sindang Sari</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<a href="https://api.whatsapp.com/send?phone=6285771229064&text=Hallo!! Kami Admin Website Sindang Sari%0ASilahkan Mengajukan Pertanyaan Mengenai Produk Kami%0ASerta Berdiskusi Terkait Budidaya Lele Sangkuriang." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<button id="tombolScrollTop" onclick="scrolltotop()"><i class="fa fa-chevron-up"></i></button>
<br>
<!-- Footer -->
<footer class="footer-wrapper">
  <div class="footer-copyright text-center py-3">
    &copy; <script>document.write(new Date().getFullYear());
  </script> Deky Alexander
  </div>
</footer>

<!-- Footer -->  
</body>
<script type="text/javascript">
    $(document).ready(function(){
    $(".fancybox").fancybox({
      openEffect: "none",
      closeEffect: "none"
    });
    
    $(".zoom").hover(function(){

      $(this).addClass('transition');
    }, function(){

      $(this).removeClass('transition');
    });
  });
    $(window).scroll(function(){
    if ($(window).scrollTop() > 100) {
      $('#tombolScrollTop').fadeIn();
    } else {
      $('#tombolScrollTop').fadeOut();
    }
  });
  function scrolltotop()
{
  $('html, body').animate({scrollTop : 0},500);
}
$('.navbar-hover .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
</script>
</html>
