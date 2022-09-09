<!DOCTYPE html>
<html>
<head>
  <title>Pemesanan</title>
  <!-- Import File CSS Internal -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/layoutweb.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/dropdown.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/mediasocial.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/scrool.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/button.css">
  <!-- Import File CSS Untuk Navbar -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--  -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- Import File CSS Untuk Media Sosial -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Import File Javascript Internal Dan External -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- Import File JS Untuk Navbar -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
<div class="container">
  <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
  <div class="main-wrapper">
    <div class="main"> 
      <div class="sidebar">
        <h2>Pemesanan</h2>
        <hr class="my-4">
        <div class="row">
          <div class="col-lg-3">

            <div class="list-group">
              <a class="list-group-item"><strong>KATEGORI</strong></a>
              <a href="<?php echo base_url()?>pemesanan/" class="list-group-item">Semua</a>
              <?php
              foreach ($kategori as $row)
              {
                ?>
                <a href="<?php echo base_url()?>pemesanan/<?php echo $row['id_kategori'];?>" class="list-group-item"><?php echo $row['nama_kategori'];?></a>
                <?php
              }
              ?>
            </div><br>

            <div class="list-group">
             <a href="<?php echo base_url()?>pemesanan/tampil_cart/" class="list-group-item"><strong><i class="fa fa-shopping-cart"></i> KERANJANG BELANJA</strong></a>
             <?php 

             $cart= $this->cart->contents();

// If cart is empty, this will show below message.
             if(empty($cart)) {
              ?>
              <a class="list-group-item">Keranjang Belanja Kosong</a>
              <?php
            }
            else
            {
              $grand_total = 0;
              foreach ($cart as $item)
              {
                $grand_total+=$item['subtotal'];
                ?>
                <a class="list-group-item"><?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'],0,",","."); ?>)=<?php echo number_format($item['subtotal'],0,",","."); ?></a>
                <?php
              }
              ?>

              <?php
            }
            ?>
          </div>
        </div>
        <div class="col-lg-9">
          <h3>Daftar Belanja</h3>
          <form method="post" action="<?php echo base_url();?>pemesanan/ubah_cart" method="post" accept-charset="utf-8">
            <div class="row"> 
              <div class="col-lg-4 col-md-6 mb-4">
                <?php
                if ($cart = $this->cart->contents())
                {
                 ?>


                 <table class="table table-striped table-bordered table-responsive w-100 d-block d-md-table" style="width:100%">
                  <tr>
                    <td>No</td>
                    <td>Gambar</td>
                    <td>Item</td>
                    <td>Harga</td>
                    <td>Qty</td>
                    <td>Jumlah</td>
                    <td>Action</td>
                  </tr>
                  <?php
// Create form and send all values in "shopping/update_cart" function.
                  $grand_total = 0;
                  $i = 1;

                  foreach ($cart as $item):
                    $grand_total = $grand_total + $item['subtotal'];
                  ?>
                  <input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
                  <input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
                  <input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
                  <input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
                  <input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
                  <input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><img class="img-responsive" src="<?php echo base_url() . 'assets/img/'.$item['gambar']; ?>" width="50px"/></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo number_format($item['price'], 0,",","."); ?></td>
                    <td><input type="text" size="1" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /></td>
                    <td><?php echo number_format($item['subtotal'], 0,",",".") ?></td>
                    <td><a href="<?php echo base_url()?>pemesanan/hapus/<?php echo $item['rowid'];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <td colspan="2"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
                  <td colspan="5" align="right">
                    <a data-toggle="modal" data-target="#myModal"  class ="btn btn-sm btn-danger" rel="noopener noreferrer" style="color: white; cursor: pointer;">Kosongkan Cart</a> <button class='btn btn-sm btn-success'  type="submit">Update Cart</button> <a href="<?php echo base_url()?>pemesanan/check_out/"  class ='btn btn-sm btn-primary'>Check Out</a>
                  </tr>

                  
                  <?php
                }
                else
                {
                  echo "<br>
                    <button class='btn btn-danger btn-circle btn-circle-lg m-1'><i class='fa fa-warning'></i></button>
                    <div class='card-body'> 
                    <h6>Keranjang belanja masih kosong</h6>
                    </div>
                    <div class='card-footer'>
                    <a href='http://localhost/dekyalexander/pemesanan/' class='btn btn-sm btn-primary'><i class='fa fa-arrow-left'></i> Kembali</a>
                  </div>";
                }
                ?>
              </form>
            </table>

            <!-- Modal Penilai -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog modal-md">
                <!-- Modal content-->
                <div class="modal-content">
                  <form method="post" action="<?php echo base_url()?>pemesanan/hapus/all">
                    <div class="modal-header">
                      <h4 class="modal-title">Konfirmasi</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                    Anda yakin mau mengosongkan Shopping Cart ?

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-sm btn-primary">Ya</button>
                  </div>

                </form>
                
              </div>

            </div>
          </div>
          <!--End Modal-->
          
        </div> 
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<a href="https://api.whatsapp.com/send?phone=6285771229064&text=Hallo!! Kami Admin Website Sindang Sari%0ASilahkan Mengajukan Pertanyaan Mengenai Produk Kami%0ASerta Berdiskusi Terkait Budidaya Lele Sangkuriang." class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
</a>
<button id="tombolScrollTop" onclick="scrolltotop()"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
<br>
<!-- Footer -->
<footer class="footer-wrapper">
  <div class="footer-copyright text-center py-3">
    &copy; <script>document.write(new Date().getFullYear());
  </script> Deky Alexander
  </div>
</footer>
</div>
<!-- Footer -->  
</body>
<script type="text/javascript">
  $('#notifications').slideDown('slow').delay(10000).slideUp('slow');
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
