<!DOCTYPE html>
<html>
<head>
<title>Daftar Artikel</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/footer_admin.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
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
<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
<a href="<?php echo site_url('dashboard_admin');?>" class="btn btn-primary sm"><i class="fas fa-user-plus"></i> Daftar Artikel</a>
        <br>
        <br>
        <table id="table" class="table table-striped table-bordered table-responsive w-100 d-block d-md-table" style="width:100%">
         <thead>
          <tr>
            <th>NO</th>
            <th>JUDUL ARTIKEL</th>
            <th>ARTIKEL</th>
            <th>TANGGAL</th>
            <th>GAMBAR</th>
            <th>KETERANGAN GAMBAR</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($data as $d) {
        ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $d->judul?></td>
        <td><?php echo $d->artikel?></td>
        <td><?php echo $d->tanggal?></td>
        <td><img src="assets/img/<?php echo $d->gambar?>" width='100' height='100'></td>
        <td><?php echo $d->keterangan_gambar?></td>
        <td><a href="<?php echo site_url('artikel/edit/'.$d->id);?>" class='btn btn-primary sm'>Edit</a><a href="<?php echo site_url('artikel/hapus/'.$d->id);?>" class='btn btn-danger sm'>Hapus</a></td>
        </tr>
        <?php } ?>
      </table>
</div>
</div>
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
$('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>
</html>