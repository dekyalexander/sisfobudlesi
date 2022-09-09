<!DOCTYPE html>
<html>
<head>
  <title>Edit Artikel</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/footer_admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">ADMIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('dashboard_admin');?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('artikel');?>">Daftar Artikel</a>
              <a class="dropdown-item" href="<?php echo site_url('admin/logout');?>">Logout</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="sidebar">
        <br>
        <h1>Portal Berita</h1>
        <?php 
        echo form_open_multipart('artikel/edit','role="form" class="form-horizontal"');
        echo form_hidden('id',$artikel['id']);
        ?>
          <div class="form-group">
          <input type="text" name="id" value="<?php echo $artikel['id']?>" class="form-control" readonly="">
        </div>
        <div class="form-group">
          <input type="text" name="judul" value="<?php echo $artikel['judul']?>" class="form-control" autocomplete="off" placeholder="Judul Berita" required>
          <?php echo form_error('judul'); ?>
        </div>
        <div class="form-group">
          <textarea id="ckeditor" name="artikel" value="<?php echo $artikel['artikel']?>" class="form-control" required></textarea>
          <?php echo form_error('artikel'); ?>
        </div>
        <div class="form-group">
          <input type="file" name="userfile" required>
          <img src="<?php echo base_url()."assets/img/".$artikel['gambar']?>" width="200px">
        </div>
        <div class="form-group">
          <input type="date" name="tanggal" value="<?php echo $artikel['tanggal']?>" autocomplete="off" class="form-control" required>
          <?php echo form_error('tanggal'); ?>
        </div>
        <div class="form-group">
          <input type="text" name="keterangan_gambar" value="<?php echo $artikel['keterangan_gambar']?>" autocomplete="off" class="form-control" placeholder="Keterangan Gambar" required>
          <?php echo form_error('keterangan_gambar'); ?>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-lg">Update Berita</button>
      </form>
    </div>
  </div>
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
  $(function () {
    CKEDITOR.replace('ckeditor');
  });
    </script>
    </html>