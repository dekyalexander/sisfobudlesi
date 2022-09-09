<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- Import File CSS Internal -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/layoutweb.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/dropdown.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/slide.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/mediasocial.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/scrool.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/card.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/navbar.css">
  <!-- Import File CSS Untuk Navbar -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- Import File CSS Untuk Media Sosial -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Import File Javascript Internal Dan External -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- Import File JS Untuk Navbar -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- Import File CSS Untuk Button Scrool -->
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="<?php echo base_url().'assets';?>/js/navbar.js"></script>
  <!--  -->
</head>
<body>
  <!-- Header -->
  <header>
   <nav id="header" class="navbar navbar-expand-sm circle navbar-hover navbar-fixed-top">
     <div id="header-container" class="container navbar-container">
       <div class="navbar-header">
        <!-- Brand -->
        <a id="brand" class="navbar-brand" href="#"><img src="<?php echo base_url().'assets';?>/img/logo sangkuriang.png" style="width: 40px;"><strong><span style="color: #eccc68; font-family: Times, Helvetica, sans-serif; font-size: 20pt;"> Sindang </span></strong> <strong><span style="color: #dfe4ea; font-family: Times, Helvetica, sans-serif; font-size: 20pt;"> Sari </span></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="nav navbar-nav">
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
  </div>
</nav>
</header>
<!-- Content -->
<main role="main">
	<div id="myCarousel" class="carousel slide caption-animate" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- The slideshow -->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="<?php echo base_url().'assets';?>/img/slide-kolam.jpg" alt="Gambar - 1">
        <div class="carousel-caption fadeInDown slide_style_left">
          <h1>Kolam Terpal Penangkaran</h1>

        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url().'assets';?>/img/slide-indukan.jpg" alt="Gambar - 2">
        <div class="carousel-caption fadeInRight slide_style_right">
          <h1>Induk Lele Sangkuriang Pemijahan</h1>

        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url().'assets';?>/img/slide-bibit.jpg" alt="Gambar - 3">
        <div class="carousel-caption fadeInLeft slide_style_left">
          <h1>Bibit Lele Sangkuriang Pembesaran</h1>

        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url().'assets';?>/img/slide-lele.jpg" alt="Gambar - 3">
        <div class="carousel-caption bounceIn slide_style_center">
          <h1>Lele Sangkuriang Siap Panen</h1>

        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <div class="container post">
    <div class="main-wrapper">
      <div class="main"> 
        <div class="sidebar">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Team Member</h2>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo base_url().'assets';?>/img/dev.jpg" alt="Card image cap" width="400" height="400">
                <div class="card-body">
                  <p class="card-text">Development</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalku">Biodata</button>
                    </div>
                    <small class="text-muted">Deky Alexander</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo base_url().'assets';?>/img/admin.png" alt="Card image cap" width="400" height="400">
                <div class="card-body">
                  <p class="card-text">Director</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Biodata</button>
                    </div>
                    <small class="text-muted">Synster Gates</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo base_url().'assets';?>/img/hr.jpg" alt="Card image cap" width="400" height="400">
                <div class="card-body">
                  <p class="card-text">Human Resource</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Biodata</button>
                    </div>
                    <small class="text-muted">Zacky Vegeance</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- The Modal -->
      <div class="modal fade" id="modalku">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Ini adalah Bagian Header Modal -->
            <div class="modal-header">
              <h4 class="modal-title">Biodata</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Ini adalah Bagian Body Modal -->
            <div class="modal-body">
              <img src="<?php echo base_url().'assets';?>/img/dev.jpg" width="100" height="100" class="card float-left mr-3">
              <p style="text-align: justify;">Nama:Deky Alexander <br> 
                TTL:Tangerang,27 Desember 1996 <br> 
                Pendidikan:Universitas Islam Syekh Yusuf <br>
                Hobby:Bermain Musik,Fishing,Traveling <br>
                Alamat:Tangerang</p>
              </div>

              <!-- Ini adalah Bagian Footer Modal -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="section-headline text-center">
      <h2>Documentation</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-image">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/3AXHAtP3KZQ" frameborder="0" allowfullscreen="allowfullscreen">

            </iframe>
          </div>
          <div class="card-content">
            <span class="card-title">Dokumentasi Pembudidayaan Lele Sangkuriang</span>
            <button type="button" id="show" class="btn btn-custom pull-right" aria-label="Left Align">
              <i class="fa fa-ellipsis-v"></i>
            </button>
          </div>
          <div class="card-reveal">
            <span class="card-title">Deskripsi</span> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <p>Pembudidayaan lele sangkuriang di penangkaran kolam semen dan terpal sangat efisien dalam dunia usaha dengan nilai jual yang sangat ekonomis.</p>
          </div><!-- card reveal -->
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-image">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/bzN3Bztu4DE" frameborder="0" allowfullscreen="allowfullscreen">

            </iframe>
          </div>
          <div class="card-content">
            <span class="card-title">Dokumentasi Kelurahan Sindang Sari</span>
            <button type="button" id="show" class="btn btn-custom pull-right" aria-label="Left Align">
              <i class="fa fa-ellipsis-v"></i>
            </button>
          </div>
          <div class="card-reveal">
            <span class="card-title">Deskripsi</span> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <p>Kelurahan sindang sari merupakan salah satu kelurahan di kecamatan pasar kemis kabupaten tangerang yang saat ini sedang membangkitkan UMKM pada masyarakat sekitar.</p>
          </div><!-- card reveal -->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container post">
  <div class="main-wrapper">
    <div class="main"> 
      <div class="sidebar">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Social Media</h2>
          </div>
        </div> 
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/BVtknvHnsNb/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BVtknvHnsNb/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BVtknvHnsNb/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#lelesangkuriang #uinpreneurs #uinberwirausaha #pengusahamuda #youngentrepreneur #uin #uinjkt #fidkom #bpiuinjkt #lele #bisnisplan</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/lelesangkuriang_/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> lele sangkuriang</a> (@lelesangkuriang_) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-06-24T06:21:21+00:00">Jun 23, 2017 at 11:21pm PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <blockquote class="twitter-tweet"><p lang="in" dir="ltr"><a href="https://twitter.com/hashtag/trubusmania?src=hash&amp;ref_src=twsrc%5Etfw">#trubusmania</a>, Pernah dengar Lele Sangkuriang.? nah bagi kamu yang ingin membudidayakan <a href="https://twitter.com/hashtag/Lele?src=hash&amp;ref_src=twsrc%5Etfw">#Lele</a>, tidak salahnya baca dahulu artikel berikut.<br>.<a href="https://twitter.com/hashtag/budidayalele?src=hash&amp;ref_src=twsrc%5Etfw">#budidayalele</a> <a href="https://twitter.com/hashtag/ternaklele?src=hash&amp;ref_src=twsrc%5Etfw">#ternaklele</a> <a href="https://twitter.com/hashtag/budidayaikanlele?src=hash&amp;ref_src=twsrc%5Etfw">#budidayaikanlele</a> <a href="https://twitter.com/budidayalele?ref_src=twsrc%5Etfw">@budidayalele</a> <a href="https://twitter.com/hashtag/lelesangkuriang?src=hash&amp;ref_src=twsrc%5Etfw">#lelesangkuriang</a> <a href="https://twitter.com/hashtag/trubusid?src=hash&amp;ref_src=twsrc%5Etfw">#trubusid</a><br>.<a href="https://t.co/U26feS1Gry">https://t.co/U26feS1Gry</a></p>&mdash; Trubus.id (@trubusid) <a href="https://twitter.com/trubusid/status/1054984773733625856?ref_src=twsrc%5Etfw">October 24, 2018</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <iframe class="embed-responsive embed-responsive-16by9"  src="https://web.facebook.com/plugins/post.php?href=https%3A%2F%2Fweb.facebook.com%2Fmedia%2Fset%2F%3Fset%3Da.102539859922318%26type%3D3&width=500" width="500" height="650" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>
<br>
<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
<a href="https://api.whatsapp.com/send?phone=6285771229064&text=Hallo!! Kami Admin Website Sindang Sari%0ASilahkan Mengajukan Pertanyaan Mengenai Produk Kami%0ASerta Berdiskusi Terkait Budidaya Lele Sangkuriang." class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
</a>
<button id="tombolScrollTop" onclick="scrolltotop()"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
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
//Script menampilkan popup login
$('#notifications').slideDown('slow').delay(3000).slideUp('slow');
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
//Script navbar hover
$('.navbar-hover .dmenu').hover(function () {
  $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
}, function () {
  $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
});

//Script popup deskripsi youtube
$(function(){

  $('#show').on('click',function(){        
    $('.card-reveal').slideToggle('slow');
  });

  $('.card-reveal .close').on('click',function(){
    $('.card-reveal').slideToggle('slow');
  });
});
</script>
</html>
