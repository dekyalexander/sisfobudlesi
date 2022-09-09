<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
	<!-- Import File CSS Internal -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/layoutweb.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/dropdown.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/mediasocial.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets';?>/css/scrool.css">
  <!-- Import File CSS Untuk Navbar -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--  -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- Import File CSS Untuk Media Sosial -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
  <!-- Import File Javascript Internal Dan External -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>
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
<!-- Table -->
<div class="container">
  <h2>Pendaftaran Anggota</h2>
  <hr class="my-4">
  <div class="main-wrapper">
    <div class="main"> 
      <div class="sidebar"> 
        <button type="button" class="btn btn-primary" onclick="add_peserta()"><i class="fas fa-user-plus"></i> Daftar Baru</button>
        <br>
        <br>
        <table id="table" class="table table-striped table-bordered table-responsive w-100 d-block d-md-table" style="width:100%">
         <thead>
          <tr>
            <th>PHOTO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>PENDIDIKAN</th>
            <th>PEKERJAAN</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>


      <script type="text/javascript">
    /* Ignited Datatables

            var save_method; //for save method string
            var table;

            $(document).ready(function() {
                //datatables
                table = $('#table').DataTable({ 
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    // Load data for the table's content from an Ajax source
                    

                    "ajax": {
                    	"url": '<?php echo site_url('pendaftaran/json'); ?>',
                    	"type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columns": [
                    {"data": "id"},
                    {"data": "nama"},
                    {"data": "alamat"},
                    {"data": "nohp"},
                    {"data": "pendidikan"},
                    {"data": "pekerjaan"},
                    {"data": "action"}
                    ],

                });

            });
            */
          </script>
          <!-- awal untuk modal dialog -->
          <!-- Modal -->
          <div class="modal fade" id="cetak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel">Kartu Anggota</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>

               </div>
               <div class="modal-body" id="halaman-cetak">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>  Tutup</button>
              </div>
            </div>
          </div>
        </div>
        <!-- akhir kode modal dialog -->
        <!-- MODAL BOOTSTRAP TAMBAH DAN EDIT DATA -->
        <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="myModalDaftarbaru">
         <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
           <div class="modal-header">
            <h5 class="modal-title" id="myModalDaftarbaru">Daftar Baru</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body form">
          <form action="#" id="form" class="form-horizontal">
            <input type="hidden" value="" name="id"/> 
            <div class="form-group">        
             <input name="nama" class="form-control" type="text" id="nama" placeholder="Masukkan Nama" autocomplate="off"  >
             <span class="help-block"></span>
           </div>
           <div class="form-group">
            <textarea name="alamat" id="alamat" class="form-control">Masukkan Alamat</textarea>
            <span class="help-block"></span>
          </div>
          <div class="form-group">        
           <input name="nohp" class="form-control" type="number" id="nohp" placeholder="Masukkan Nomor HP" autocomplate="off" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="12"  >
           <span class="help-block"></span>
         </div>
         <div class="form-group">        
           <select name="pendidikan" id="pendidikan" class="form-control">
            <option>--Pilih Pendidikan--</option>
            <option>SD</option>
            <option>SMP</option>
            <option>SMA</option>
            <option>S1</option>
            <option>S2</option>
            <option>S3</option>
          </select>
          <span class="help-block"></span>
        </div>
        <div class="form-group">        
         <select name="pekerjaan" id="pekerjaan" class="form-control">
          <option>--Pilih Pekerjaan--</option>
          <option>Buruh</option>
          <option>Pegawai Negri</option>
          <option>Pegawai Swasta</option>
          <option>Wirausaha</option>
          <option>Seniman</option>
        </select>
        <span class="help-block"></span>
      </div>
      <div class="form-group" id="photo-preview">        
        (Tidak Ada Foto)
        <span class="help-block"></span>
      </div>
      <div class="form-group">        
       <input name="photo" type="file">
       <span class="help-block"></span>
     </div>
   </div>
   <div class="modal-footer">
    <button type="submit" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button><button type="reset" class="btn btn-danger">Batal</button>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br>
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
</div>
<!-- Footer -->  
</body>
<script type="text/javascript">
  $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
  var save_method; //for save method string
  var table;
  var base_url = '<?php echo base_url();?>';
  $(document).ready(function() {
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?php echo site_url('pendaftaran/ajax_list')?>",
          "type": "POST"
        },
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ -1 ], //last column
          "orderable": false, //set not orderable
        },
        ],
      });
  //set input/textarea/select event when change value, remove class error and remove text help block 
  $("input").change(function(){
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
  });
  $("textarea").change(function(){
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
  });
  $("select").change(function(){
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
  });    
});
  function add_peserta()
  {
    save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Daftar Baru'); // Set Title to Bootstrap modal title
      $('#photo-preview').hide(); // hide photo preview modal

    $('#label-photo').text('Upload Photo'); // label photo upload
  }
  function edit_peserta(id)
  {
    save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
      //Ajax Load data from ajax
       $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $.ajax({
      url : "<?php echo site_url('pendaftaran/ajax_edit/')?>/" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {

        $('[name="id"]').val(data.id);
        $('[name="nama"]').val(data.nama);
        $('[name="alamat"]').val(data.alamat);
        $('[name="nohp"]').val(data.nohp);
        $('[name="pendidikan"]').val(data.pendidikan);
        $('[name="pekerjaan"]').val(data.pekerjaan);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit'); // Set title to Bootstrap modal title
             $('#photo-preview').show(); // show photo preview modal

             if(data.photo)
             {
                $('#label-photo').text('Change Photo'); // label photo upload
                $('#photo-preview').html('<img src="'+base_url+'./uploads/'+data.photo+'" class="img-responsive" width="200px"> <br>'); // show photo
                $('#photo-preview').append('<input type="checkbox" name="remove_photo" value="'+data.photo+'"/> Hapus foto saat menyimpan'); // remove photo

              }
              else
              {
                $('#label-photo').text('Upload Photo'); // label photo upload
                $('#photo-preview div').text('(No photo)');
              }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
              alert('Error get data from ajax');
            }
          });
  }

  function reload_table()
  {
      table.ajax.reload(null,false); //reload datatable ajax 
    }
    function save()
    {
    $('#btnSave').text('Simpan...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
    if(save_method == 'add') 
    {
      url = "<?php echo site_url('pendaftaran/ajax_add')?>";
    }
    else
    {
      url = "<?php echo site_url('pendaftaran/ajax_update')?>";
    }
       // ajax adding data to database
       var formData = new FormData($('#form')[0]);
       $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {
               if(data.status) //if success close modal and reload ajax table
               {
                $('#modal_form').modal('hide');
                reload_table();
              }
              else
              {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                  }
                }
            $('#btnSave').text('Simpan'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
            alert('Error adding / update data');
              $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
          }
        });
     }
     function print($id)
     {  
      $('#cetak').modal('show');
    $('.modal-title').text('Kartu Anggota'); // Set title to Bootstrap modal title
    // ambil nilai id dari link print
    $('#halaman-cetak').html('<iframe src="<?php echo base_url();?>cetak/kartu/'+$id+'" class="embed-responsive-item" frameborder="no" width="400" height="400"></iframe>');
  }


  function delete_peserta(id)
  {
    swal({
      title: 'Apakah kamu yakin?',
      text: "Akan menghapus data ini",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus',
      cancelButtonText: 'Batal',
      closeOnConfirm: false
    }).then(function(isConfirm) {
      if (isConfirm) {
     // ajax delete data to database
     $.ajax({
      url : "<?php echo site_url('pendaftaran/ajax_delete')?>/"+id,
      type: "POST",
      dataType: "JSON",
      success: function(data)
      {
               //if success reload ajax table
               $('#modal_form').modal('hide');
               reload_table();
               swal(
                'Menghapus',
                'Data anda telah dihapus.',
                'success'
                );
             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / update data');
            }
          });
     
   }
 });

  }
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