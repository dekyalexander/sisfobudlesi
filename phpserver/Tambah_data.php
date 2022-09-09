<?php
 
//Define your host here.
 $hostname = "localhost";

 //Define your Database Name here.
 $dbname = "ci_sangkuriang";
 
 //Define your database User Name here.
 $username = "root";
 
 //Define your database Password here.
 $password = "";
 
 
 $conn = mysqli_connect($hostname, $username, $password);
 
 mysqli_select_db($conn,$dbname);
 // Type your website name or domain name here.
 $domain_name = "http://192.168.150.2/dekyalexander/phpserver/" ;
 
 // Image uploading folder.
 $target_dir = "uploads";
 
 // Generating random image name each time so image name will not be same .
 $target_dir = $target_dir . "/" .rand() . "_" . time() . ".jpeg";
 
   // Receiving image tag sent from application.
 $nama = $_POST["nama"];

 // Receiving image tag sent from application.
 $alamat = $_POST["alamat"];

 // Receiving image tag sent from application.
 $nohp = $_POST["nohp"];

 // Receiving image tag sent from application.
 $pendidikan = $_POST["pendidikan"];

 // Receiving image tag sent from application.
 $pekerjaan = $_POST["pekerjaan"];
 // Receiving image sent from Application	
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_dir)){
 
 // Adding domain name with image random name.
 $target_dir = $domain_name . $target_dir ;


 
 // Inserting data into MySQL database.
 mysqli_query($conn,("INSERT INTO peserta ( nama,alamat,nohp,pendidikan,pekerjaan,photo) VALUES('$nama','$alamat','$nohp','$pendidikan','$pekerjaan','$target_dir')"));
 
 $MESSAGE = "Berhasil Menambahkan Data" ;
 
 // Printing response message on screen after successfully inserting the image .	
 echo json_encode($MESSAGE);
 }else{
 $MESSAGE = "Gagal Menambahkan Data" ;
 
 // Printing response message on screen after successfully inserting the image .	
 echo json_encode($MESSAGE);
 }
 
?>